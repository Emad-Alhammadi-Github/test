// const { add } = require("lodash");

const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');


// const signUpButtonqq = document.getElementById('signUpqq');
// const signInButtonqq = document.getElementById('signInqq');


signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");

});







// signInButtonqq.addEventListener('click', () => {
// 	container.classList.add("right-panel-active");
// });

// signUpButtonqq.addEventListener('click', () => {
// 	container.classList.remove("right-panel-active");
// });












