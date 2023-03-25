    document.onload = console.log('loaded');
    var view;

    function firstPage(view) {
        view = document.getElementById('page_num').value;
        console.log("view: " + view);
        changeMain(view);
    }

    function changeTable() {
        $('#table1').toggle();
        $('#table2').toggle();
    }

    function changeMain(main_num) {
        let mains = $('.main');
        for (let i = 0; i < mains.length; i++) {
            $(mains[i]).hide();
            // console.log(mains[i]);
            view = main_num;
            $('#page_num').val(main_num);

        }
        $(mains[main_num]).show();
    }

    // function initOrderButtons() {
    //     const buttons = document.getElementsByClassName("btn-order");
    //     for (let button of buttons) {
    //         button.addEventListener("click", orderTable);
    //     }
    // }

    function sendForm(elem_id){
        // TODO: send the form to the server
        console.log("send form: " + elem_id);
        // change the save button to edit button
        // and change the text to non editable
        editMode(elem_id);
    }


    function editMode(elem_id){
        console.log("edit mode: " + elem_id);
        // change the edit button to save button
        // and change the text to editable
        let main = $('.main')[view];
        let tables = $(main).find('table');
        console.log("tables: " + tables.length);
        let table = tables; //$(tables[table_num]);
        let body = $(table).find('tbody')[0];
        // console.log("body: " + body);

        let rows = $(body).find('tr');
        console.log("rows: " + rows.length);
        for (let i = 0; i < rows.length; i++) {
            let cols = $(rows[i]).find('td');
            console.log("cols: " + cols.length);
            // console.log(cols[0].innerText);
            let id = cols[0].innerText;
            console.log("id: " + id);
            if (id == elem_id) {
                console.log("found id: " + id);
                let cols = $(rows[i]).find('td');
                // console.log("cols: " + cols.length);
                // i = 1 to skip the id
                // length -1 to avoid the manage col
                for (let i = 1; i < cols.length - 1; i++) {
                    // console.log("col: " + i);
                    // make label hidden and input editable shown
                    let label = $(cols[i]).find('label');
                    let editable = $(cols[i]).find('.editable-form');
                    $(label).toggle();
                    $(editable).toggle();
                }
                break;
            }
        }
        // find row with col 0 = id
        // let rows = $(body).find('tr');
        // let cols = $(rows).find('td');
        // console.log(cols)[0].find('input')[0].val();
        // // i = 1 to skip the id
        // for (let i = 1; i < cols.length; i++) {
        //     console.log("col: " + i);
        //     // make label hidden and input editable shown
        //     let label = $(cols[i]).find('label');
        //     let input = $(cols[i]).find('input');
        //     $(label).toggle();
        //     $(input).toggle();
        // }
    
    }
    
    function orderTable(table_num, col, are_numbers = false) {
        console.log(table_num, col);
        let table, rows, switching, i, x, y, shouldSwitch;
        // get the table to order from the button pressed, target id 
        // table = document.getElementById(this.id.slice(0, -1));
        let main = $('.main')[view];
        let tables = $(main).find('table');
        // console.log(tables);
        table = tables; //$(tables[table_num]);
        // console.log(table);
        switching = true;
        /* Make a loop that will continue until
        no switching has been done: */
        while (switching) {
            // Start by saying: no switching is done:
            switching = false;
            // rows = table.rows;
            rows = $(table).find('tbody tr');
            // console.log(table.rows);
            /* Loop through all table rows (except the
            first, which contains table headers): */
            for (i = 0; i < (rows.length - 1); i++) {
                // Start by saying there should be no switching:
                shouldSwitch = false;
                /* Get the two elements you want to compare,
                one from current row and one from the next: */
                // console.log(id);
                x = $(rows[i]).find('td')[col];
                y = $(rows[i + 1]).find('td')[col];
                // Check if the two rows should switch place:
                if (are_numbers) {
                    if (Number(x.innerHTML) > Number(y.innerHTML)) {
                        // If so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                } else if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    // If so, mark as a switch and break the loop:
                    shouldSwitch = true;
                    break;
                }
            }
            if (shouldSwitch) {
                /* If a switch has been marked, make the switch
                and mark that a switch has been done: */
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
    }

    // sync the searcg bar with the table
    function searchTable() {
        // get the value of the search bar
        let input = $('#searchBar').val();
        input = input.toLowerCase();
        // get table not hidden
        let main = $('.main')[view];
        let tables = $(main).find('.table');
        let table;
        for (let i = 0; i < tables.length; i++) {
            if (!tables[i].hidden) {
                table = tables[i];
                break;
            }
        }
        // let table = document.getElementsByClassName("table")[table_num];
        // use jquery to get the table
        let tr = $(table).find('tr');
        for (let i = 0; i < tr.length; i++) {
            let td = $(tr[i]).find('td');
            for (let j = 0; j < td.length; j++) {
                let txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toLowerCase().indexOf(input) > -1) {
                    $(tr[i]).show();
                    break;
                } else {
                    $(tr[i]).hide();
                }
            }
            
        }
    }

    function deleteRow(table_num, id){
        let main = $('.main')[view];
        let tables = $(main).find('.table');
        let table = tables[table_num];
        let tr = $(table).find('tr');
        for (let i = 0; i < tr.length; i++) {
            let td = $(tr[i]).find('td');
            let txtValue = td[0].textContent || td[0].innerText;
            if (txtValue == id) {
                $(tr[i]).remove();
                break;
            }
        }
    }