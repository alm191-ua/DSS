    document.onload = console.log('loaded');
    var view;

    function init(view) {
        firstPage(view);

        // get url parameters filter_books_by and filter_books_value
        const {
            host, hostname, href, origin, pathname, port, protocol, search
        } = window.location;
        let params = new URLSearchParams(search);
        // filter books old values
        let filter_books_by = params.get('filter_books_by');
        let filter_books_value = params.get('filter_books_value');
        if (filter_books_by != null && filter_books_value != null) {
            $('#books_filter_by').val(filter_books_by);
            showSelects(filter_books_by);
            if (filter_books_by == 'author') {
                $('#authors').val(filter_books_value);
            }else if (filter_books_by == 'category') {
                $('#categories').val(filter_books_value);
            } else{
                $('#books_filter_value').val(filter_books_value);
            }
        }

        // filter authors old values
        let filter_authors_by = params.get('filter_authors_by');
        let filter_authors_value = params.get('filter_authors_value');
        if (filter_authors_by != null && filter_authors_value != null) {
            $('#authors_filter_by').val(filter_authors_by);
            $('#authors_filter_value').val(filter_authors_value);
        }

        // filter suggestions old values
        let filter_suggestions_by = params.get('filter_suggestions_by');
        let filter_suggestions_value = params.get('filter_suggestions_value');
        if (filter_suggestions_by != null && filter_suggestions_value != null) {
            $('#suggestions_filter_by').val(filter_suggestions_by);
            $('#suggestions_filter_value').val(filter_suggestions_value);
        }

        // filter users old values
        let filter_users_by = params.get('filter_users_by');
        let filter_users_value = params.get('filter_users_value');
        if (filter_users_by != null && filter_users_value != null) {
            showSelectsUsers(filter_users_by);
            $('#users_filter_by').val(filter_users_by);
            $('#users_filter_value').val(filter_users_value);
            $('users_filter_value_boolean').val(filter_users_value);
        }

        // filter categories old values
        let filter_categories_by = params.get('filter_categories_by');
        let filter_categories_value = params.get('filter_categories_value');
        if (filter_categories_by != null && filter_categories_value != null) {
            $('#categories_filter_by').val(filter_categories_by);
            $('#categories_filter_value').val(filter_categories_value);
        }

        // filter reviews old values
        let filter_reviews_by = params.get('filter_reviews_by');
        let filter_reviews_value = params.get('filter_reviews_value');
        if (filter_reviews_by != null && filter_reviews_value != null) {
            $('#reviews_filter_by').val(filter_reviews_by);
            $('#reviews_filter_value').val(filter_reviews_value);
        }

        let editables = $('.editable-form');
        for (let i = 0; i < editables.length; i++) {
            $(editables[i]).hide();
        }

        let hide = $('.hide');
        for (let i = 0; i < hide.length; i++) {
            $(hide[i]).hide();
        }

        let htmlTemplates = $('#HtmlTemplate');
        htmlTemplates.hide();

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
        if (view == null || view < 0 || view > 8) {
            view = 1;
        }
        console.log("view: " + view);
        changeMain(view);
    }

    function changeTable() {
        $('#table1').toggle();
        $('#table2').toggle();
    }

    function changeMain(main_num) {
        const {
            host, hostname, href, origin, pathname, port, protocol, search
        } = window.location;
        let url = origin + pathname + search;
        let params = new URLSearchParams(search);
        params.set('page_num', main_num);
        url = origin + pathname + '?' + params.toString();
        window.history.replaceState(null, null, url);
        
        let mains = $('.main');
        for (let i = 0; i < mains.length; i++) {
            $(mains[i]).hide();
            // console.log(mains[i]);
            view = main_num;
            $('#page_num').val(main_num);

        }
        $(mains[main_num]).show();
    }

    function showNewsletterPanel(panel) {
        let panels = $('.panel-content');
        for (let i = 0; i < panels.length; i++) {
            $(panels[i]).hide();
        }
        $(panels[panel]).show();
        
        let buttons = $('.panel-title');
        for (let i = 0; i < buttons.length; i++) {
            $(buttons[i]).addClass('active');
        }
        $(buttons[panel]).removeClass('active');
    }

    function showHtmlTemplates() {
        let checkbox = $('#html');
        let template = $('#HtmlTemplate');
        if (checkbox.is(':checked')) {
            template.show();
        }
        else {
            template.hide();
        }
    }

    // function setHtmlTemplate(value) {
    //     let textarea = $('#message');
    //     textarea.val(value);
    // }

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

    function showSelects(select_value) {
        if (select_value == 'author') {
            $('#authors').show();
            $('#categories').hide();
            $('#books_filter_value').hide();
        } else if (select_value == 'category') {
            $('#authors').hide();
            $('#categories').show();
            $('#books_filter_value').hide();
        } else {
            $('#authors').hide();
            $('#categories').hide();
            $('#books_filter_value').show();
        }
    }

    function showSelectsUsers (select_value) {
        if (select_value == 'is_admin') {
            $('#users_filter_value').hide();
            $('#users_filter_value_boolean').show();
        } else {
            $('#users_filter_value').show();
            $('#users_filter_value_boolean').hide();
        }
    }

    $(function() {
        // $('.filter-zone').hover(function() {
        //   $('.filter-zone > *').css('opacity', '100%');
        //   $('.filter-zone').css('background-color', '#394756');
        // }, function() {
        //   // on mouseout, reset the background colour
        //   $('.filter-zone > *').css('opacity', '30%');
        //   $('.filter-zone > .filter-label').css('opacity', '100%');
        //   $('.filter-zone').css('background-color', '');
        // });
        $('.filter-zone-ocult').hover(function() {
            $('.filter-zone-ocult').css('display', 'none');
            $('.filter-zone').css('display', 'block');
        });
        $('.filter-zone').hover(function() {
            $('.filter-zone').css('display', 'block');
        }, function() {
            $('.filter-zone').css('display', 'none');
            $('.filter-zone-ocult').css('display', 'block');
        });

      });


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