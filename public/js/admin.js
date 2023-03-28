    document.onload = console.log('loaded');
    var view;

    function init(view) {
        firstPage(view);

        let editables = $('.editable-form');
        for (let i = 0; i < editables.length; i++) {
            $(editables[i]).hide();
        }

        let hide = $('.hide');
        for (let i = 0; i < hide.length; i++) {
            $(hide[i]).hide();
        }

        // let main = $('.main');
        // for (let i = 0; i < main.length; i++) {
        //     let tables = $(main[i]).find('table');
        //     for (let j = 0; j < tables.length; j++) {
        //         let table = tables[j];
        //         let body = $(table).find('tbody')[0];
        //         let rows = $(body).find('tr');
        //         for (let k = 0; k < rows.length; k++) {
        //             let cols = $(rows[k]).find('td');
        //             let buttons = $(cols[cols.length - 1]).find('.editable-form');
        //             for (let l = 0; l < buttons.length; l++) {
        //                 $(buttons[l]).hide();
        //             }
        //         }
        //     }
        // }
    }

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

    function readImage(input, elem_id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
        
            reader.onload = function (e) {
            let dst = $('.img_editable');
            // console.log("dst: " + dst.length);
            for (let i = 0; i < dst.length; i++) {
                if ($(dst[i]).attr('id') == "img_edit" + elem_id) {
                    // console.log("IMG: " + $(dst[i]) + " id: " + $(dst[i]).attr('id'));
                    $(dst[i]).attr('src', e.target.result);
                    break;
                }
            }
            // .attr('src', e.target.result);
            };
        
            reader.readAsDataURL(input.files[0]);
        }
    }


    // function sendForm(elem_id){
    //     // TODO: send the form to the server
    //     console.log("FORM-> send form: " + elem_id);
    //     // change the save button to edit button
    //     // and change the text to non editable
    //     editMode(elem_id);

    //     // set form inputs to inputs values
    //     let main = $('.main')[view];
    //     let table = $(main).find('table');
    //     console.log("FORM-> table: " + table.length);
    //     let body = $(table).find('tbody')[0];
    //     // console.log("body: " + body);

    //     let rows = $(body).find('tr');
    //     console.log("FORM-> rows: " + rows.length);
    //     for (let i = 0; i < rows.length; i++) {
    //         let cols = $(rows[i]).find('td');
    //         console.log("FORM-> cols: " + cols.length);
    //         // console.log(cols[0].innerText);
    //         let id = cols[0].innerText;
    //         console.log("FORM-> id: " + id);
    //         if (id == elem_id) {
    //             console.log("FORM-> found id: " + id);
    //             // console.log("cols: " + cols.length);
    //             // i = 1 to skip the id
    //             // length -1 to avoid the manage col
    //             let form_inputs = $(cols[cols.length - 1]).find('input');
    //             for (let i = 1; i < cols.length - 1; i++) {
    //                 console.log("FORM-> input: " + $(form_inputs[i+2]).attr('name') + "----------------");
    //                 console.log("FORM-> old input: " + $(form_inputs[i+2]).val());
    //                 console.log("FORM-> editable: " + $(cols[i]).find('.editable-form').val());
    //                 $(form_inputs[i+2]).val($(cols[i]).find('.editable-form').val());
    //                 console.log("FORM-> new input: " + $(form_inputs[i+2]).val());
    //                 console.log("FORM-> ----------------");
    //             }
                
    //             // let form_inputs = $(cols[cols.length - 1]).find('input');
    //             // for (let i = 1; i < cols.length - 1; i++) {
    //             //     let editable = $(cols[i]).find('.editable-form')[0];
    //             //     // recorre los inputs del form en manage y cambia el valor del que tenga el nombre igual al editable
    //             //     for (let j = 1; j < form_inputs.length; j++) {
    //             //         let input = form_inputs[j];
    //             //         let name = $(input).attr('name');
    //             //         let value = $(input).val();
    //             //         console.log("FORM-> name: " + name + " value: " + value);
    //             //         console.log("FORM-> name: " + name + " editable: " + $(editable).val());
    //             //         if (name == $(editable).attr('name')) {
    //             //             let a = $(input).val($(editable).val());
    //             //             // console.log("FORM-> input_test: " + a);
    //             //         }
    //             //         console.log("FORM-> new input: " + $(cols[cols.length - 1]).find('input')[j].value);
    //             //     }

    //             // }
    //             break;
    //         }
    //     }
    // }


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
                // console.log("cols: " + cols.length);
                // console.log("cols: " + cols.length);
                // i = 1 to skip the id
                // length -1 to avoid the manage col
                for (let i = 1; i < cols.length - 1; i++) {
                    // console.log("col: " + i);
                    // make label hidden and input editable shown
                    let label = $(cols[i]).find('.label-cell');
                    let editable = $(cols[i]).find('.editable-form');
                    $(label).toggle();
                    $(editable).toggle();
                }
                let labels = $(cols[cols.length - 1]).find('.label-cell');
                let editables = $(cols[cols.length - 1]).find('.editable-form');
                // console.log("buttons: " + buttons.length);
                for (let i = 0; i < labels.length; i++) {
                    $(labels[i]).toggle();
                    $(editables[i]).toggle();
                }
                break;
            }
        }
    
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


    function togglePagesLinks() {
        let sidenav = $('#responsive-sidenav')[0];
        let dropdown = $(sidenav).find('.dropdown-content')[0];
        $(dropdown).toggle();
    }
   
    $(document).click(function(event) { 
        if(!$(event.target).closest('.dropdown-content').length &&      
        !$(event.target).hasClass('dropbtn')) {
            if($('.dropdown-content').is(":visible")) {
                $('.dropdown-content').hide();
            }
        }        
    })