function confirm_remove(url, name){
    Swal.fire({
        title: `Bạn có thực sự muốn xóa danh mục "${name}"?`,
        // showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Đồng ý',
        cancelButtonText: `Hủy`,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          window.location.href = url
        }
    })
}
function lydohuy(url,reason){
    Swal.fire({
        title: `Nhập vào tình trạng`,
        prompt:(),
        showCancelButton: true,
        confirmButtonText: 'Đồng ý',
        cancelButtonText: `Hủy`,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          window.location.href = url
        }
    })

}