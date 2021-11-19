const slideContainner = document.querySelector('.containner');
const slide = document.querySelector('.slides');
const nextBtn = document.getElementById('next-btn');
const preBtn = document.getElementById('pre-btn');
const interval = 5000;

let slides = document.querySelectorAll('.slide');
let index = 1;
let slideId;

const firstclone = slides[0].cloneNode(true);
const lastclone = slides[slides.length - 1].cloneNode(true);

firstclone.id = 'first-clone';
lastclone.id = 'last-clone';

slide.append(firstclone);
slide.prepend(lastclone);

const slideWidth = slides[index].clientWidth;

slide.style.transform = `translateX(${-slideWidth * index}px)`;

console.log(slides);

const startSlide = ()=>{
    setInterval(() => {
        moveToNextSlide();
    },interval);
}

const getSlides = () => document.querySelectorAll('.slide');

slide.addEventListener('transitionend', ()=>{
    slides = getSlides();
    if (slides[index]. id === firstclone.id) {
        slide.style.transition = 'none';
        index = 1;
        slide.style.transform = `translateX(${-slideWidth * index}px)`;
    }
    if (slides[index]. id === lastclone.id) {
        slide.style.transition = 'none';
        index = slides.length - 2;
        slide.style.transform = `translateX(${-slideWidth * index}px)`;
    }
});

const moveToNextSlide = ()=>{
    slides = getSlides();
    if (index >= slides.length -1) return; 
    index++;
    slide.style.transform = `translateX(${-slideWidth * index}px)`;
    slide.style.transition = '.7s';
}

const moveToPreviousSlide = ()=>{
    if (index <= 0) return;
    index--;
    slide.style.transform = `translateX(${-slideWidth * index}px)`;
    slide.style.transition = '.7s';
}

nextBtn.addEventListener('click', moveToNextSlide)
preBtn.addEventListener('click', moveToPreviousSlide);
startSlide();