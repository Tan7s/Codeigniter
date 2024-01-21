function formatPriceVND(price) {
	return price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

document.addEventListener("DOMContentLoaded", function () {
	var formatElements = document.querySelectorAll('.format_price');
	formatElements.forEach(function (element) {
		var getPrice = parseInt(element.textContent, 10);
		var formatPrice = formatPriceVND(getPrice);
		element.textContent = formatPrice + " đ";
	});
});
function formatPriceVND(price) {
	return price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}




$(document).ajaxComplete(function () {

	function formatPriceVND(price) {
		return price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	}

	var formatElements = document.querySelectorAll('.format_price_s');
	formatElements.forEach(function (element) {
		var getPrice = parseInt(element.textContent, 10);
		var formatPrice = formatPriceVND(getPrice);
		element.textContent = formatPrice + " đ";
	});
});



document.addEventListener('click', function (event) {
	var searchField = document.querySelector('.search-field');
	var dropdownMenu = document.querySelector('.search-menu');

	var isClickInsideSearchField = searchField.contains(event.target);
	if (!isClickInsideSearchField) {

		dropdownMenu.style.display = 'none';
	}
});

document.querySelector('.search-field').addEventListener('input', function (event) {
	var dropdownMenu = document.querySelector('.search-menu');
	if (this.value.trim() !== '') {
		dropdownMenu.style.display = 'block';
	} else {
		dropdownMenu.style.display = 'none';
	}
});


$(document).ready(function () {
	function searchProducts() {
		var keyword = $('#keyword').val();

		$.ajax({
			type: 'POST',
			url: 'user/search/search',
			data: { keyword: keyword },
			success: function (response) {
				$('#searchResults').html(response);
			},
			error: function (xhr, status, error) {
				console.log('Error: ' + error);
			}
		});
	}


	$('#searchButton').on('click', function () {
		searchProducts();
	});


	$('#keyword').on('keypress', function (e) {
		if (e.which === 13) {
			e.preventDefault();
			searchProducts();
		}
	});

	$('#keyword').on('input', function () {
		searchProducts();
	});
});




function soluongchange(obj) {
	//obj = doi tuong cua the input, div, a, span
	let soluong = $(obj).val();//gia tri cua doi tuong khi thay doi.
	let id = $(obj).attr('tan_id');
	console.log(soluong)
	console.log(id)
	$.ajax({
		url: 'ajax-action',
		type: 'POST',
		dataType: 'json',
		data: { id: id, soluong: soluong },
		success: function (response) {
			$('#parent_container2').html(response.cart_list);
		},
		error: function (xhr, status, error) {
			// Handle errors here
			console.error(xhr.responseText);
		}
	});
	function formatPriceVND(price) {
		return price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	}
	var formatElements = document.querySelectorAll('.format_price');
	formatElements.forEach(function (element) {
		var getPrice = parseInt(element.textContent, 10);
		var formatPrice = formatPriceVND(getPrice);
		element.textContent = formatPrice + " đ";
	});
}
function toggleForm() {
	var ssssDiv = document.querySelector('.ssss');
	var formContainer = document.querySelector('.form-container');
	ssssDiv.classList.toggle('show');
	formContainer.classList.toggle('show');
}
function logout() {
	var logoutForm = document.getElementById('logoutForm');
	logoutForm.submit(); // Gửi form khi nhấn nút
}





















