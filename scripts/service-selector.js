const moveBy = 33.3; // Value to move items by, expressed as a percentage.
let maxItems = document.querySelectorAll(".item-content").length;
let left = 0;
let middle = 1; // (Item 1, |Item 2|, Item 3)
let right = 2;
let next = 3; // (Item 1, Item 2, Item 3) |Item 4| 
let previous = maxItems - 1; // |Item 5| (Item 1, Item 2, Item 3)
let activeBackground = 1;
const invisibleTimeouts = [];
/*
 * At start going forwards, the fourth (next) item needs to move to the right offscreen box, which it's already there.
 * Range: [-moveBy * 3, moveBy * (maxItems - 4)]
 */
let rightOffscreenBoxOffset = 0;
const rightOffScreenBoxLowerLimit = roundToOneDecimal(-moveBy * 3);
const rightOffScreenBoxUpperLimit = roundToOneDecimal(moveBy * (maxItems - 4));
/*
 * At start going backwards, the last item needs to move to the left offscreen box, which is moveBy * maxItems distance away.
 * Range: [moveBy, moveBy * maxItems]
 */
let leftOffscreenBoxOffset = roundToOneDecimal(moveBy * maxItems);
const leftOffScreenBoxOffsetLowerLimit = moveBy;
const leftOffScreenBoxOffsetUpperLimit = roundToOneDecimal(moveBy * maxItems);

const rightArrow = document.querySelector(".right-arrow");
rightArrow.addEventListener("click", function() {
    stopSlidingItems();
    forward();
});

const leftArrow = document.querySelector(".left-arrow");
leftArrow.addEventListener("click", function() {
    stopSlidingItems();
    backward();
});

let slideItems = setInterval(forward, 5 * 1000);

function stopSlidingItems() {
    if (slideItems) {
        clearInterval(slideItems);
        slideItems = null;
    }
}

function roundToOneDecimal(number) {
    return Math.round(number * 10) / 10;
}

let itemsContent = document.querySelectorAll(".item-container .item-content");
for (let itemContent of itemsContent) {
    itemContent.addEventListener("click", function() {
        stopSlidingItems();

        let itemContainer = itemContent.parentElement;
        let id = parseInt(itemContainer.dataset.id);

        if (id == middle) {
            window.location.href = itemContainer.dataset.buttonHref;
            return;
        }

        if ((id == next - 1) || (id == maxItems - 1 && next == 0)) {
            forward();
        } else if (id == previous + 1 || (id == 0 && previous == maxItems - 1)) {
            backward();
        }
    });
}

let dots = document.querySelectorAll(".dot");
for (let dot of dots) {
    dot.addEventListener("click", function() {
        stopSlidingItems();

        let id = parseInt(dot.dataset.id);

        if (id == middle) {
            return;
        }

        if (id > middle) { // Forward
            move(id - middle, forward, maxItems - id + middle, backward, id);
        } else if (id < middle) { // Backward
            move(middle - id, backward, maxItems - (middle - id), forward, id);
        }
    });
}

function move(times, direction, alternateTimes, alternateDirection, newMiddle) {
    times = Math.abs(times);
    alternateTimes = Math.abs(alternateTimes);
    let cycle = 0;
    let maxCycles = alternateTimes < times ? alternateTimes : times;

    document.querySelector(".dot[data-id='" + middle + "']").classList.remove("active");
    document.querySelector(".dot[data-id='" + newMiddle + "']").classList.add("active");

    let inactiveBackground = 1;
    activeBackground++;
    if (activeBackground > 2) {
        activeBackground = 1;
        inactiveBackground = 2;
    }

    const newMiddleItem = document.querySelector(".service-selector .item-container[data-id='" + newMiddle + "']");
    imgSrc = newMiddleItem.dataset.backgroundImage;

    const activeBackgroundImg = document.querySelector(".service-selector .background-img-" + activeBackground);
    activeBackgroundImg.style.backgroundImage = "url('" + imgSrc + "')";
    activeBackgroundImg.style.transitionDuration = "0s";
    activeBackgroundImg.style.opacity = "1";

    const inactiveBackgroundImg = document.querySelector(".service-selector .background-img-" + inactiveBackground);
    inactiveBackgroundImg.style.opacity = "0";

    setTimeout(function() {
        activeBackgroundImg.style.transitionDuration = "0.4s";
        activeBackgroundImg.style.zIndex = "1";
        inactiveBackgroundImg.style.zIndex = "0";    
    }, 0.4 * 1000);

    let overlayOpacity = null;
    if (newMiddleItem.hasAttribute("data-overlay-opacity")) {
        overlayOpacity = newMiddleItem.dataset.overlayOpacity;
    }

    let overlayColor = null;
    if (newMiddleItem.hasAttribute("data-overlay-color")) {
        overlayColor = newMiddleItem.dataset.overlayColor;
    }

    document.querySelector(".service-selector .overlay").style.opacity = overlayOpacity;
    document.querySelector(".service-selector .overlay").style.backgroundColor = overlayColor;

    const title = document.querySelector(".service-selector h2");
    title.innerHTML = newMiddleItem.dataset.title;

    const buttons = document.querySelectorAll(".service-selector .button");
    for (let button of buttons) {
        button.querySelector("span").innerHTML = newMiddleItem.dataset.buttonText;
    }
    document.querySelector(".service-selector .button.secondary").href = newMiddleItem.dataset.buttonHref;

    let interval = setInterval(function() {
        if (alternateTimes < times) {
            // Shortest path.
            alternateDirection(false, false, false);
        } else {
            direction(false, false, false);
        }
        
        cycle++;
        if (cycle == maxCycles) {
            clearInterval(interval);
        }
    }, 0.1 * 1000);
}

function forward(doDotsScrollAnimation = true, doBackgroundAnimation = true, doTextChange = true) {
    let previousLeft = left;
    let previousRight = right;
    let previousMiddle = middle;

    left++;
    if (left == maxItems) {
        left = 0;
    }

    right++;
    if (right == maxItems) {
        right = 0;
    }

    middle++;
    if (middle == maxItems) {
        middle = 0;
    }

    moveItems(true, previousLeft, previousRight, previousMiddle, doDotsScrollAnimation, doBackgroundAnimation, doTextChange);

    next++;
    if (next == maxItems) {
        next = 0;
        rightOffscreenBoxOffset = rightOffScreenBoxLowerLimit;
    }

    previous++;
    if (previous == maxItems) {
        previous = 0;
    }
}

function backward(doDotsScrollAnimation = true, doBackgroundAnimation = true, doTextChange = true) {
    let previousLeft = left;
    let previousRight = right;
    let previousMiddle = middle;

    left--;
    if (left == -1) {
        left = maxItems - 1;
    }

    right--;
    if (right == -1) {
        right = maxItems - 1;
    }

    middle--;
    if (middle == -1) {
        middle = maxItems - 1;
    }

    moveItems(false, previousLeft, previousRight, previousMiddle, doDotsScrollAnimation, doBackgroundAnimation, doTextChange);

    next--;
    if (next == -1) {
        next = maxItems - 1;
    }

    previous--;
    if (previous == -1) {
        previous = maxItems - 1;
        leftOffscreenBoxOffset = leftOffScreenBoxOffsetUpperLimit; // Upper cause it's backwards.
    }
}

function moveItems(isForward, previousLeft, previousRight, previousMiddle, doDotsScrollAnimation = true, doBackgroundAnimation = true, doTextChange = true) {
    while (invisibleTimeouts.length != 0) {
        let timeout = invisibleTimeouts.shift();
        clearTimeout(timeout);
    }

    let titleText, buttonText, imgSrc, overlayOpacity = null, overlayColor = null;

    let moveItemsBy = moveBy;
    if (!isForward) {
        moveItemsBy = -moveBy;
    }

    const items = document.querySelectorAll(".item-container");
    for (let x = 0; x < items.length; x++) {
        let item = items[x];
        newItem = isForward ? next : previous;

        // now when the last item is on the right and we go backwards then forwards again, the last item is lost.
        if (x == newItem) {
            item.style.transitionDuration = "0s";

            if (isForward) {
                console.log("forward!");
                item.style.right = rightOffscreenBoxOffset + "%";

                if (leftOffscreenBoxOffset > leftOffScreenBoxOffsetUpperLimit) {
                    leftOffscreenBoxOffset = leftOffScreenBoxOffsetLowerLimit;
                }
            } else {
                console.log("backwards");
                item.style.right = leftOffscreenBoxOffset + "%";

                if (rightOffscreenBoxOffset < rightOffScreenBoxLowerLimit) {
                    rightOffscreenBoxOffset = rightOffScreenBoxUpperLimit;
                }
            }

            leftOffscreenBoxOffset = roundToOneDecimal(leftOffscreenBoxOffset + moveItemsBy);
            rightOffscreenBoxOffset = roundToOneDecimal(rightOffscreenBoxOffset + moveItemsBy);

            setTimeout(function() {
                item.style.transitionDuration = "0.4s";
                item.style.right = item.style.right = (Number(item.style.right.slice(0, item.style.right.length - 1)) + moveItemsBy) + "%";
            }, 1);
        } else {
            item.style.right = (Number(item.style.right.slice(0, item.style.right.length - 1)) + moveItemsBy) + "%";
        }

        if (x == previousLeft) {
            item.classList.remove("left");
        }

        if (x == previousRight) {
            item.classList.remove("right");
        }

        if (x == previousMiddle) {
            item.classList.remove("middle");
        }

        if (x == left) {
            item.classList.add("left");
        }

        if (x == right) {
            item.classList.add("right");
        }

        if (x == middle) {
            item.classList.add("middle");

            titleText = item.dataset.title;
            buttonText = item.dataset.buttonText;
            buttonHref = item.dataset.buttonHref;
            imgSrc = item.dataset.backgroundImage;

            if (item.hasAttribute("data-overlay-opacity")) {
                overlayOpacity = item.dataset.overlayOpacity;
            }

            if (item.hasAttribute("data-overlay-color")) {
                overlayColor = item.dataset.overlayColor;
            }
        }

        if (x == left || x == right || x == middle) {
            item.classList.remove("invisible");
        } else {
            invisibleTimeouts.push(setTimeout(function() {
                item.classList.add("invisible");
                invisibleTimeouts.shift();
            }, 0.4 * 1000));
        }
    }

    if (doDotsScrollAnimation) {
        document.querySelector(".dot[data-id='" + previousMiddle + "']").classList.remove("active");
        document.querySelector(".dot[data-id='" + middle + "']").classList.add("active");
    }

    if (doBackgroundAnimation) {
        // active: 1, inactive, 2
        let inactiveBackground = 1;
        activeBackground++;

        // active, 2, inactive 1,

        if (activeBackground > 2) {
            activeBackground = 1;
            inactiveBackground = 2;
            // active 1, inactive 2
        }

        const activeBackgroundImg = document.querySelector(".service-selector .background-img-" + activeBackground);
        activeBackgroundImg.style.backgroundImage = "url('" + imgSrc + "')";
        activeBackgroundImg.style.transitionDuration = "0s";
        activeBackgroundImg.style.opacity = "1";

        const inactiveBackgroundImg = document.querySelector(".service-selector .background-img-" + inactiveBackground);
        inactiveBackgroundImg.style.opacity = "0";

        setTimeout(function() {
            activeBackgroundImg.style.transitionDuration = "0.4s";
            activeBackgroundImg.style.zIndex = "1";
            inactiveBackgroundImg.style.zIndex = "0";
        
        }, 0.4 * 1000);

        document.querySelector(".service-selector .overlay").style.opacity = overlayOpacity;
        document.querySelector(".service-selector .overlay").style.backgroundColor = overlayColor;
        console.log("Set to " + overlayColor);
    }

    if (doTextChange) {
        const title = document.querySelector(".service-selector h2");
        title.innerHTML = titleText;

        const buttons = document.querySelectorAll(".service-selector .button");
        for (let button of buttons) {
            button.querySelector("span").innerHTML = buttonText;
        }
        document.querySelector(".service-selector .button.secondary").href = buttonHref;
    }
}
