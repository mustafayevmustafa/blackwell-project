
const btnLeft = document.querySelector('.left__btn');
const btnRight = document.querySelector('.right__btn');
const tabMenu = document.querySelector('.tab__menu');

const iconVisibility = () => {
	let scrollLeftValue = Math.ceil(tabMenu.scrollLeft);
	console.log('1.', scrollLeftValue);

	let scrollableWidth = tabMenu.scrollWidth - tabMenu.clientWidth;
	console.log('2.', scrollableWidth);

	btnLeft.style.display = scrollLeftValue > 0 ? 'flex' : 'none';
	btnRight.style.display = scrollableWidth > scrollLeftValue ? 'flex' : 'none';
};

btnRight.addEventListener('click', () => {
	tabMenu.scrollLeft += 300;
	setTimeout(() => iconVisibility(), 50);
});

btnLeft.addEventListener('click', () => {
	tabMenu.scrollLeft -= 300;
	setTimeout(() => iconVisibility(), 50);
});


window.onresize = function () {
	btnRight.style.display =
		tabMenu.scrollWidth > tabMenu.clientWidth
			|| tabMenu.scrollWidth >= window.innerWidth
			? 'block' : 'none';
	btnLeft.style.display = tabMenu.scrollWidth >= window.innerWidth ? '' : 'none';

	let scrollLeftValue = Math.round(tabMenu.scrollLeft);
	btnLeft.style.display = scrollLeftValue > 0 ? 'block' : 'none';
};


let activeDrag = false;

tabMenu.addEventListener('mousemove', (drag) => {
	if (!activeDrag) return;
	tabMenu.scrollLeft -= drag.movementX;
	iconVisibility();

	tabMenu.classList.add('dragging');
});

document.addEventListener('mouseup', () => {
	activeDrag = false;

	tabMenu.classList.remove('dragging');
});

tabMenu.addEventListener('mousedown', () => {
	activeDrag = true;
});

const tabs = document.querySelectorAll('.tab');
const tabBtns = document.querySelectorAll('.tab__btn');

const tab_Nav = function (tabBtnClick) {
	tabBtns.forEach((tabBtn) => {
		tabBtn.classList.remove('active');
	});

	tabs.forEach((tab) => {
		tab.classList.remove('active');
	});

	tabBtns[tabBtnClick].classList.add('active');
	tabs[tabBtnClick].classList.add('active');
};

tabBtns.forEach((tabBtn, i) => {
	tabBtn.addEventListener('click', () => {
		tab_Nav(i);
	});
});