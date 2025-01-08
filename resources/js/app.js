import './bootstrap';
import 'flowbite'
import Plyr from 'plyr';

document.addEventListener("DOMContentLoaded", function () {
    const players = document.querySelectorAll('.plyr-video');
    players.forEach(player => new Plyr(player));
});