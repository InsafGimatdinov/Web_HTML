let userName = prompt("Как вас зовут?");

function showName() {
	let message = `Вас зовут ${userName}, приятно познакомиться!`
	return message;
}

alert(showName());
