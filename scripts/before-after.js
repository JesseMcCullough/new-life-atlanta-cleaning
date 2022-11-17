const moveBy = 100; // Value to move items by, expressed as a percentage.
let maxItems = document.querySelectorAll(".item-container").length;
let middle = 0; // (Item 1, |Item 2|, Item 3)
let next = 1; // (Item 1, Item 2, Item 3) |Item 4| 
let previous = maxItems - 1; // |Item 5| (Item 1, Item 2, Item 3)
let activeBackground = 1;
const invisibleTimeouts = [];

let rightOffscreenBoxOffset = 0;
const rightOffScreenBoxLowerLimit = -100;
const rightOffScreenBoxUpperLimit = 400;

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

/**
 * Stops the slideItems interval, stopping the items from sliding automatically.
 */
function stopSlidingItems() {
    if (slideItems) {
        clearInterval(slideItems);
        slideItems = null;
    }
}

/**
 * Rounds a number to one decimal place.
 * 
 * @param {number} number Number to be rounded to one decimal place.
 * @return {number} Number rounded to one decimal place.
 */
function roundToOneDecimal(number) {
    return Math.round(number * 10) / 10;
}

/**
 * Adds an onClick event to each item's corresponding dot for moving the items forward and backward. 
 */
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

/**
 * Moves the items an amount of times in a direction. If there is a lesser amount of times
 * available to move in the opposite direction while still arriving at the same new middle item,
 * it will take that path instead. All animations will occur.
 * 
 * @param {number} times Amount of times to move the items.
 * @param direction Direction to move the items by method call (forward or backward).
 * @param {number} alternateTimes Alternate amount of times to move the items.
 * @param alternateDirection Altenate direction to move the items by method call (forward or backward).
 * @param {number} newMiddle The new middle item by id.
 */
function move(times, direction, alternateTimes, alternateDirection, newMiddle) {
    times = Math.abs(times);
    alternateTimes = Math.abs(alternateTimes);
    let cycle = 0;
    let maxCycles = alternateTimes < times ? alternateTimes : times;

    // dot animation
    applyDotsAnimation(middle, newMiddle);

    // bg animation
    const newMiddleItem = document.querySelector(".service-selector .item-container[data-id='" + newMiddle + "']");
    imgSrc = newMiddleItem.dataset.backgroundImage;

    let overlayOpacity = null;
    if (newMiddleItem.hasAttribute("data-overlay-opacity")) {
        overlayOpacity = newMiddleItem.dataset.overlayOpacity;
    }

    let overlayColor = null;
    if (newMiddleItem.hasAttribute("data-overlay-color")) {
        overlayColor = newMiddleItem.dataset.overlayColor;
    }

    applyBackgroundAnimation(imgSrc, overlayOpacity, overlayColor);
    //applyTextChange(newMiddleItem.dataset.title, newMiddleItem.dataset.buttonText, newMiddleItem.dataset.buttonHref);

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

/**
 * Moves the items forward by one.
 * 
 * @param {boolean} doDotsAnimation true to do the dots animation, otherwise false.
 * @param {boolean} doBackgroundAnimation true to do the background animation, otherwise false.
 * @param {boolean} doTextChange true to do the text change (title, buttons), otherwise false.
 */
function forward(doDotsAnimation = true, doBackgroundAnimation = true, doTextChange = true) {
    let previousMiddle = middle;

    middle++;
    if (middle == maxItems) {
        middle = 0;
    }

    moveItems(true, previousMiddle, doDotsAnimation, doBackgroundAnimation, doTextChange);

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

/**
 * Moves the items backward by one.
 * 
 * @param {boolean} doDotsAnimation true to do the dots animation, otherwise false.
 * @param {boolean} doBackgroundAnimation true to do the background animation, otherwise false.
 * @param {boolean} doTextChange true to do the text change (title, buttons), otherwise false.
 */
function backward(doDotsAnimation = true, doBackgroundAnimation = true, doTextChange = true) {
    let previousMiddle = middle;

    middle--;
    if (middle == -1) {
        middle = maxItems - 1;
    }

    moveItems(false, previousMiddle, doDotsAnimation, doBackgroundAnimation, doTextChange);

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

/**
 * Moves the items either forward or backward by one. This is a helper method for forward and backward,
 * since they share the same logic but only differ in a positive/negative way.
 * 
 * @param {boolean} isForward true to move forward, otherwise false to move backward.
 * @param {number} previousLeft Previous left item by id. Before this method fully executes, this is the current left item.
 * @param {number} previousRight The previous right item by id. Before this method fully executes, this is the current right item.
 * @param {number} previousMiddle The previous middle item by id. Before this method fully executes, this is the current middle item.
 * @param {boolean} doDotsAnimation true to do the dots animation, otherwise false.
 * @param {boolean} doBackgroundAnimation true to do the background animation, otherwise false.
 * @param {boolean} doTextChange true to do the text change (title, buttons), otherwise false.
 */
function moveItems(isForward, previousMiddle, doDotsAnimation = true, doBackgroundAnimation = true, doTextChange = true) {
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
        if (x == newItem) {
            item.style.transitionDuration = "0s";
            /* 
             * Must be in the following order: 
             * Move item (item.style.right)
             * Change offset
             * Check offset
             */

            if (isForward) {
                item.style.right = rightOffscreenBoxOffset + "%";
            } else {
                item.style.right = leftOffscreenBoxOffset + "%";
            }
            
            leftOffscreenBoxOffset = roundToOneDecimal(leftOffscreenBoxOffset + moveItemsBy);
            if (leftOffscreenBoxOffset > leftOffScreenBoxOffsetUpperLimit) {
                leftOffscreenBoxOffset = leftOffScreenBoxOffsetLowerLimit;
            }

            rightOffscreenBoxOffset = roundToOneDecimal(rightOffscreenBoxOffset + moveItemsBy);
            if (rightOffscreenBoxOffset < rightOffScreenBoxLowerLimit) {
                rightOffscreenBoxOffset = rightOffScreenBoxUpperLimit - 100;
            }

            setTimeout(function() {
                item.style.transitionDuration = "0.4s";
                item.style.right = item.style.right = (Number(item.style.right.slice(0, item.style.right.length - 1)) + moveItemsBy) + "%";
            }, 1);
        } else {
            item.style.right = (Number(item.style.right.slice(0, item.style.right.length - 1)) + moveItemsBy) + "%";
        }

        if (x == previousMiddle) {
            item.classList.remove("middle");
        }

        if (x == middle) {
            item.classList.add("middle");

            imgSrc = item.dataset.backgroundImage;

            if (item.hasAttribute("data-overlay-opacity")) {
                overlayOpacity = item.dataset.overlayOpacity;
            }

            if (item.hasAttribute("data-overlay-color")) {
                overlayColor = item.dataset.overlayColor;
            }
        }

        if (x == middle) {
            item.classList.remove("invisible");
        } else {
            invisibleTimeouts.push(setTimeout(function() {
                item.classList.add("invisible");
                invisibleTimeouts.shift();
            }, 0.4 * 1000));
        }
    }

    if (doDotsAnimation) {
        applyDotsAnimation(previousMiddle, middle);
    }

    if (doBackgroundAnimation) {
        applyBackgroundAnimation(imgSrc, overlayOpacity, overlayColor);
    }
}

/**
 * Applies the dot animation.
 * 
 * @param {oldMiddle} oldMiddle Old middle item by id.
 * @param {newMiddle} newMiddle New middle item by id.
 */
function applyDotsAnimation(oldMiddle, newMiddle) {
    document.querySelector(".dot[data-id='" + oldMiddle + "']").classList.remove("active");
    document.querySelector(".dot[data-id='" + newMiddle + "']").classList.add("active");
}

/**
 * Applies the background animation.
 * 
 * @param {string} newImageSrc New background image source.
 * @param {string} overlayOpacity Overlay opacity.
 * @param {string} overlayColor Overlay color.
 */
function applyBackgroundAnimation(newImageSrc, overlayOpacity, overlayColor) {
    let inactiveBackground = 1;
    activeBackground++;
    if (activeBackground > 2) {
        activeBackground = 1;
        inactiveBackground = 2;
    }

    const activeBackgroundImg = document.querySelector(".service-selector .background-img-" + activeBackground);
    activeBackgroundImg.style.backgroundImage = "url('" + newImageSrc + "')";
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
}

/**
 * Applies the text change for the title and the buttons.
 *  
 * @param {string} newTitle New title.
 * @param {string} newButtonText New button text (secondary button, not schedule button).
 * @param {string} newButtonHref New button href (secondary button, not schedule button).
 */
function applyTextChange(newTitle, newButtonText, newButtonHref) {
    const title = document.querySelector(".service-selector h2");
    title.innerHTML = newTitle;

    const buttons = document.querySelectorAll(".service-selector .button");
    for (let button of buttons) {
        button.querySelector("span").innerHTML = newButtonText;
    }
    document.querySelector(".service-selector .button.secondary").href = newButtonHref;
}
