$('#change_password').change(function () {
    let status = $(this).prop('checked');
    if (status) {
        $('#password').show();
        $('#confirm_password').show();
    }
    else {
        $('#password').hide();
        $('#confirm_password').hide();
    }
    $('#input_password').val("");
    $('#input_confirm_password').val("");

});

$('.del_confirm').click(function () {
    let url = $(this).data('url');
    console.log(url);
    if (confirm("Bạn chắc chắn muốn xóa user này ??")) {
        window.location.href = url;
    } else {
        return;
    }
})







function toggleForm() {
    var ssssDiv = document.querySelector('.ssss');
    var formContainer = document.querySelector('.form-container');
    ssssDiv.classList.toggle('show');
    formContainer.classList.toggle('show');
}
