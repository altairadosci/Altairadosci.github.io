document.getElementById('save-hidden').addEventListener("click", hiddenCloseclick);
document.getElementById('click-to-hide').addEventListener("click", hiddenCloseclick);
function hiddenCloseclick() {
	let x = document.getElementById('hidden-element');
	if (x.style.display == "none"){
		x.style.display = "block";
	} else {
		x.style.display = "none"}
	};
document.getElementById('save-hidden2').addEventListener("click", hiddenCloseclick2);
document.getElementById('click-to-hide2').addEventListener("click", hiddenCloseclick2);
function hiddenCloseclick2() {
	let a = document.getElementById('hidden-element2');
	if (a.style.display == "none"){
		a.style.display = "block";
	} else {
		a.style.display = "none"}
	};