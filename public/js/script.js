// $(function () {

//     $("#tampilModalTambah").on("click", function () {
//         $("#exampleModalLabel").html("Tambah Data Mahasiswa");
//         $('.modal-footer button[type=submit]').html('Tambah Data');
//     });

//     $("#tampilModalUbah").on("click", function () {
//         $("#exampleModalLabel").html("Ubah Data Mahasiswa");
//         // $('.modal-footer button[type=submit]').html('Ubah Data');
//         const id = $(this).data('id');
//         console.log(id);

//         $.ajax({
//             url: 'http://localhost/hai/public/mahasiswa/getUbah',
//             data: { id: id },
//             method: 'post',
//             // dataType: 'json',
//             success: function (data) {
//                 console.log(data);
//             }
//         })

//         // $.ajax({
//         //     url: 'http://localhost/hai/public/mahasiswa/getUbah',
//         //     type: "post",
//         //     dataType: "json",
//         //     data: { id: id },
//         //     success: function (data) {
//         //         console.log(data)
//         //     }
//         // });

//     });


// });