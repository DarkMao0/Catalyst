<style>
.cube {
    position: absolute;
    top: 80vh;
    left: 45vw;
    width: 10px;
    height: 10px;
    border: solid 1px var(--primary-color-01);
    transform-origin: top left;
    transform: scale(0) rotate(0deg) translate(-50%, -50%);
    -webkit-animation: cube 12s ease-in forwards infinite;
            animation: cube 12s ease-in forwards infinite;
}

.cube:nth-child(2n) {
    border-color: var(--primary-color-01);
}

.cube:nth-child(2) {
    -webkit-animation-delay: 2s;
    animation-delay: 2s;
    left: 25vw;
    top: 40vh;
}

.cube:nth-child(3) {
    -webkit-animation-delay: 4s;
    animation-delay: 4s;
    left: 75vw;
    top: 50vh;
}

.cube:nth-child(4) {
    -webkit-animation-delay: 6s;
    animation-delay: 6s;
    left: 90vw;
    top: 10vh;
}

.cube:nth-child(5) {
    -webkit-animation-delay: 8s;
    animation-delay: 8s;
    left: 10vw;
    top: 85vh;
}

.cube:nth-child(6) {
    -webkit-animation-delay: 10s;
    animation-delay: 10s;
    left: 50vw;
    top: 10vh;
}

@-webkit-keyframes cube {
    from {
        transform: scale(0) rotate(0deg) translate(-50%, -50%);
        opacity: 0.5;
    }

    to {
        transform: scale(6) rotate(960deg) translate(-50%, -50%);
        opacity: 0;
    }
}

@keyframes cube {
    from {
        transform: scale(0) rotate(0deg) translate(-50%, -50%);
        opacity: 0.5;
    }

    to {
        transform: scale(6) rotate(960deg) translate(-50%, -50%);
        opacity: 0;
    }
}
</style>

<? if (!isset($cubeAmount)) { ?>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
<? } else { ?>
    <? for($i = 0; $i < $cubeAmount; $i++) { ?>
        <div class="cube"></div>
    <? } ?>
<? } ?>