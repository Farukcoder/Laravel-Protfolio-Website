var url = "http://127.0.0.1/Laravel_Protfolio_Website/admin/";

$(document).ready(function() {
    $('#VisitorDt').DataTable();
    $('.dataTables_length').addClass('bs-select');
});

function getServiceData() {
    axios.get(url + 'getServiceData')
        .then(function(response) {

            var jsonData = response.data;

            $.each(jsonData, function(i, item) {

                // console.log(jsonData[i].service_name);
                $('<tr>').html(
                    "<td> <img class='table-img' src=" + jsonData[i].service_img + "></td>" +
                    "<td>" + jsonData[i].service_name + "</td>" +
                    "<td>" + jsonData[i].service_des + "</td>" +
                    "<td> <a href='' ><i class='fas fa-edit'></i> </a> </td>" +
                    "<td> <a href='' ><i class='fas fa-trash-alt'></i></a> </td>"
                ).appendTo('#service_table');

            });
        })
        .catch(function(error) {

        });
}