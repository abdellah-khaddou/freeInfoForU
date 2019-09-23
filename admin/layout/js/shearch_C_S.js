// on click out the modal ,close it
var modal = document.getElementById('id01');
var modal1 = document.getElementById('id02');
var modal2 = document.getElementById('id03');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}

$(document).ready(function() {
    $('#dtDynamicVerticalScrollExample').DataTable({
        "scrollY": "50vh",
        "scrollCollapse": true,
    });
    $('.dataTables_length').addClass('bs-select');
});



//Search bar in th table rechercher() of country and specialité

function rechercher() {
    var input, filter, table, tr, td, tdd, tddd, i, txtValue, txtValueI, txtValueII, x, z, y;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {

        td = tr[i].getElementsByTagName("td")[2];
        tdd = tr[i].getElementsByTagName("td")[3];
        tddd = tr[i].getElementsByTagName("td")[4];

        if (td) {

            txtValue = td.textContent || td.innerText;

            z = txtValue.toUpperCase().indexOf(filter);

            if (tdd) {

                txtValueI = tdd.textContent || tdd.innerText;

                x = txtValueI.toUpperCase().indexOf(filter);

                if (tddd) {
                    txtValueII = tddd.textContent || tddd.innerText;

                    y = txtValueII.toUpperCase().indexOf(filter);

                    if (z > -1 || x > -1 || y > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }

            }
        }
    }

}