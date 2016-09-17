$('alert').delay(3000).slideUp();

//Xác nhận xóa
function confirmDelete(){
	if(confirm("Bạn có thực sự muốn xóa không?"))
		return true;
	return false;
}