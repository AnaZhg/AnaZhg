<style>

    /* INTRO NETFLIX */

@import url('https://fonts.googleapis.com/css?family=Roboto:700,900');
body {
    background: radial-gradient(#fff, #aaa);
    background-size: 100vw 100vh;
    overflow: hidden;
    padding-top: 40vh;
}

.txt {
    text-align: center;
    font-family: 'Roboto';
    font-size: 12vmin;
    font-weight: 700;
    animation: netflix_style 3.5s infinite;
    outline: none;
    white-space: nowrap;
}

@keyframes netflix_style {
    0% {
        text-shadow: makelongshadow(100, 1);
        color: #f3f3f3;
        transform: scale(1.5, 1.5);
    }
    10% {
        text-shadow: makelongshadow(100, 1.5);
        color: #f3f3f3;
        transform: scale(1.5, 1.5);
    }
    15% {
        color: #f3f3f3;
    }
    20% {
        color: #e90418;
        text-shadow: none;
        transform: scale(1.1, 1.1);
    }
    75% {
        opacity: 1;
    }
    80% {
        opacity: 0;
        color: #e90418;
        transform: scale(0.85, 0.9);
    }
    100% {
        opacity: 0;
    }
}
</style>
