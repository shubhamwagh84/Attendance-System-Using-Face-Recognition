// var $pagination = $('#pagination'),
totalRecords = 0,
records = [],
displayRecords = [],
recPerPage = 10,
page = 1,
totalPages = 0;
$.ajax({
      url: "http://dummy.restapiexample.com/api/v1/employees",
      async: true,
      dataType: 'json',
      success: function (data) {
                  records = data;
                  totalRecords = records.length;
                  totalPages = Math.ceil(totalRecords / recPerPage);
                  //apply_pagination();
      }
});

function generate_table() {
    var tr;
    $('#Department_table').html('');
    for (var i = 0; i < displayRecords.length; i++) {
          tr = $('<tr/>');
          tr.append("<td>" + displayRecords[i].employee_name + "</td>");
          tr.append("<td>" + displayRecords[i].employee_salary + "</td>");
          tr.append("<td>" + displayRecords[i].employee_age + "</td>");
          $('#Department_table').append(tr);
    }
}

function apply_pagination() {
      $('#pagination').twbsPagination({
            totalPages: 35,
            visiblePages: 7,
            onPageClick: function (event, page) {
                  console.log(page + ' (from options)');
            }
        });
}

apply_pagination();