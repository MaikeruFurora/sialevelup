$(function () {
    let qr;
    qr = new QRious({
        element: document.getElementById("qr-code"),
        size: 63,
        value: "123456",
    });

    $("#pname, #pdescription").on("keyup", function () {
        let qrtext = $(this).val();
        qr.set({
            foreground: "black",
            size: 63,
            value: qrtext,
        });
    });
    const popupCenter = ({ url, title, w, h }) => {
        const dualScreenLeft =
            window.screenLeft !== undefined
                ? window.screenLeft
                : window.screenX;
        const dualScreenTop =
            window.screenTop !== undefined ? window.screenTop : window.screenY;

        const width = window.innerWidth
            ? window.innerWidth
            : document.documentElement.clientWidth
            ? document.documentElement.clientWidth
            : screen.width;
        const height = window.innerHeight
            ? window.innerHeight
            : document.documentElement.clientHeight
            ? document.documentElement.clientHeight
            : screen.height;

        const systemZoom = width / window.screen.availWidth;
        const left = (width - w) / 2 / systemZoom + dualScreenLeft;
        const top = (height - h) / 2 / systemZoom + dualScreenTop;
        const newWindow = window.open(
            url,
            title,
            `
          scrollbars=yes,
          width=${w / systemZoom}, 
          height=${h / systemZoom}, 
          top=${top}, 
          left=${left}
          `
        );
        newWindow;
    };

    /***
     *
     *  report window pop up
     *
     */
    $(".pap").on("click", function () {
        popupCenter({
            url: "http://127.0.0.1:8000/print",
            title: "Print All Product",
            w: 800,
            h: 700,
        });
    });

    $(".pap1").on("click", function () {
        popupCenter({
            url: "http://127.0.0.1:8000/print1",
            title: "Print All Product",
            w: 800,
            h: 700,
        });
    });

    /**
     *
     *  Section of Main page card
     *
     */

    // const fieldNames2 = [
    //     { field: "Customer", color: "#7AC2DA", font: "supervisor_account" },
    //     { field: "Invoice", color: "#53BBB4", font: "streetview" },
    //     { field: "Backup Database", color: "#99A6E1", font: "streetview" },
    //     { field: "User Guide", color: "#E099D3", font: "streetview" },
    // ];
    // let hold2 = "";
    // // <img src="http://127.0.0.1:8000/img/${val.field}.png" width="40%">
    // fieldNames2.forEach((val) => {
    //     hold2 += ` <div class="col-lg-3 col-md-3 col-sm-12 animated fadeInUp">
    //                 <div class="card mt-3 pt-4 hvr-grow btnAction" style="background:${val.color};width:100%" id="${val.field}">
    //                     <div class="card-body text-center">
    //                         <span style="font-size:70px;color:#e6e6e6" class="ml-5 mr-5 material-icons">
    //                         ${val.font}
    //                         </span>
    //                     </div>
    //                     <button type="button" style="background:rgb(108, 117, 125,0.7);color:white" class="btn btn-sm btn-block pt-2 pb-2">${val.field}</button>
    //                 </div>
    //             </div>`;
    // });

    // setTimeout(() => {
    //     $("#showData2").html(hold2);
    // }, 2000);
    let hold = "";
    const fieldNames = [
        { field: "Category", color: "#F39893", font: "layers" },
        { field: "Product", color: "#7C87A5", font: "view_quilt" },
        { field: "Order", color: "#F5A572", font: "bubble_chart" },
        { field: "Report", color: "#ABD194", font: "insert_chart" },
        { field: "Customer", color: "#7AC2DA", font: "supervisor_account" },
        { field: "Invoice", color: "#53BBB4", font: "streetview" },
        { field: "Backup Database", color: "#99A6E1", font: "cloud_download" },
        { field: "User Guide", color: "#E099D3", font: "style" },
    ];
    // <img src="http://127.0.0.1:8000/img/${i}.png" width="40%">
    fieldNames.forEach((e, i) => {
        hold += `<div class="col-lg-3 col-md-6 col-sm-6  mt-3 mb-3 animated fadeInUp">
                <div class="card shadow card-hover text-center pt-4 btnAction hvr-grow" style="background:${e.color};width:100%" id="${e.field}">
                    <div class="card-body">
                    <span style="font-size:60px;color:#e6e6e6" class="ml-5 mr-5 material-icons">
                    ${e.font}
                    </span>
                    </div>
                        <button type="button" style="background:rgb(108, 117, 125,0.7);color:white" class="btn btn-sm btn-block pt-2 pb-2">${e.field}</button>
                </div>
            </div>`;
    });
    setTimeout(() => {
        $("#showData").html(hold);
    }, 2000);

    $(document).on("click", ".btnAction", function () {
        let data = $(this).attr("id");
        let separate = data.split("_");
        let ddd = separate[0].split(" ").join("_");
        console.log(ddd);
        switch (ddd) {
            case "Category":
                $(".dialogs")
                    .removeClass("modal-xl modal-lg")
                    .addClass("modal-sm");
                break;
            case "Product":
                $(".dialogs")
                    .removeClass("modal-md modal-lg")
                    .addClass("modal-xl");
                break;
            case "Order":
                $(".dialogs")
                    .removeClass("modal-md modal-lg")
                    .addClass("modal-xl");
                break;
            case "Report":
                $(".dialogs")
                    .removeClass("modal-xl modal-lg")
                    .addClass("modal-sm");
                break;
            case "Customer":
                $(".dialogs")
                    .removeClass("modal-md modal-xl")
                    .addClass("modal-lg");
                break;
            case "Invoice":
                $(".dialogs")
                    .removeClass("modal-md modal-lg")
                    .addClass("modal-xl");
                break;
            case "User_Guide":
                $(".dialogs")
                    .removeClass("modal-md modal-lg")
                    .addClass("modal-xl");
                break;
            case "Backup_Database":
                $(".dialogs")
                    .removeClass("modal-xl modal-lg")
                    .addClass("modal-sm");
                break;
            default:
                break;
        }
        // fieldNames2.map((val) => {
        //     val.field == separate[0]
        //         ? $("#" + val.field + "Div").show()
        //         : $("#" + val.field + "Div").hide();
        // });
        fieldNames.map((val) => {
            let fieldNow = val.field.split(" ").join("_");
            fieldNow == ddd
                ? $("#" + fieldNow + "Div").show()
                : $("#" + fieldNow + "Div").hide();
        });
        OpenModal(separate[0], separate[1], data);
        // console.log(data);
        // $(".targetForm").attr("id", separate[0] + "Form");
    });

    let OpenModal = (name, action, complete) => {
        $("#staticBackdrop").modal("show");
        $("#staticBackdropLabel").text(name);
    };

    /*

 this are for category development only 

*/

    $("#CategoryForm").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            url: "Category",
            type: "POST",
            contentType: false,
            processData: false,
            cache: false,
            data: new FormData(this),
        })
            .done(function (data) {
                console.log($("#CategoryForm"));
                getCategory();
                document.getElementById("CategoryForm").reset();
            })
            .fail(function (jqxHR, textStatus, errorThrown) {
                console.log(jqxHR, textStatus, errorThrown);
            });
    });
    let getCategory = () => {
        let hold = "";
        let thold = "";
        $.ajax({
            url: "getCategory",
            type: "GET",
            dataType: "json",
        })
            .done(function (data) {
                hold += `<option value="">~ Select Category ~</option>`;
                // console.log(data);
                data.forEach((val) => {
                    thold += `<tr>
                            <td>${val.cname}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-sm btn-danger cdelete" id="${val.id}">Delete</button>
                                    <button type="button" class="btn btn-sm btn-primary cedit" id="${val.id}">Edit</button>
                                </div>
                            </td>
                          </tr>`;
                    hold += `<option value="${val.id}">${val.cname}</option>`;
                });
                $("#getCategory").html(hold);
                $("#tableCategory").html(thold);
            })
            .fail(function (jqxHR, textStatus, errorThrown) {
                console.log(jqxHR, textStatus, errorThrown);
            });
    };
    getCategory();

    $(document).on("click", ".cdelete", function () {
        let id = $(this).attr("id");
        $.ajax({
            url: "Category-delete/" + id,
            type: "DELETE",
            data: { _token: $('input[name="_token"]').val() },
        })
            .done(function (data) {
                getCategory();
            })
            .fail(function (jqxHR, textStatus, errorThrown) {
                console.log(jqxHR, textStatus, errorThrown);
            });
    });

    $(document).on("click", ".cedit", function () {
        let id = $(this).attr("id");
        $.ajax({
            url: "Category-edit/" + id,
            type: "GET",
            data: { _token: $('input[name="_token"]').val() },
        })
            .done(function (data) {
                $("input[name='cname']").val(data.cname);
                $("#cid").val(data.id);
            })
            .fail(function (jqxHR, textStatus, errorThrown) {
                console.log(jqxHR, textStatus, errorThrown);
            });
    });

    /*

    this area for product development only

*/
    $("#ProductForm").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            url: "Product",
            type: "POST",
            contentType: false,
            processData: false,
            cache: false,
            data: new FormData(this),
        })
            .done(function (data) {
                getCategory();
                options();
                document.getElementById("ProductForm").reset();
                tableProduct.ajax.reload();
                CustomerTable.ajax.reload();
            })
            .fail(function (jqxHR, textStatus, errorThrown) {
                console.log(jqxHR, textStatus, errorThrown);
            });
    });

    let tableProduct = $("#tableProduct").DataTable({
        lengthChange: false,
        pageLength: 7,
        ajax: "getProduct",
        columns: [
            { data: "pcode" },
            { data: "pname" },
            { data: "pdescription" },
            { data: "pquantity" },
            { data: "pprice" },
            {
                data: null,
                render: function (data) {
                    return data.pstatus == "1"
                        ? `<span class="badge badge-success">Active</span>`
                        : `<span class="badge badge-danger">Inactive</span>`;
                },
            },
            {
                data: null,
                render: function (data) {
                    return `<div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" style="font-size:12px" class="btn btn-sm btn-danger pdelete" id="${data.id}">Delete</button>
                            <button type="button" style="font-size:12px" class="btn btn-sm btn-primary pedit" id="${data.id}">Edit</button>
                        </div>`;
                },
            },
        ],
    });

    $(document).on("click", ".pedit", function () {
        let id = $(this).attr("id");
        $.ajax({
            url: "Product-show/" + id,
            type: "POST",
            data: { _token: $('input[name="_token"]').val() },
        })
            .done(function (data) {
                $("#pid").val(data.id);
                $("#getCategory").val(data.category_id);
                $("#pname").val(data.pname);
                $("#pquantity").val(data.pquantity);
                $("#pprice").val(data.pprice);
                $("#pdescription").val(data.pdescription);
                $("#pstatus").val(data.pstatus);
            })
            .fail(function (jqxHR, textStatus, errorThrown) {
                console.log(jqxHR, textStatus, errorThrown);
            });
    });

    let CustomerTable = $("#CustomerTable").DataTable({
        lengthChange: false,
        ajax: "sortCustomer",
        pageLength: 6,
        columns: [
            { data: "cname" },
            { data: "caddress" },
            { data: "cdate" },
            {
                data: null,
                render: function (data) {
                    return `<button type="button" style="font-size:10px" class="btn btn-sm btn-danger csdelete" id="${data.id}">Delete</button>`;
                },
            },
        ],
    });

    $(document).on("click", ".csdelete", function () {
        let id = $(this).attr("id");
        $.ajax({
            url: "deleteCustomer/" + id,
            type: "DELETE",
            data: { _token: $('input[name="_token"]').val() },
        })
            .done(function (data) {
                CustomerTable.ajax.reload();
            })
            .fail(function (jqxHR, textStatus, errorThrown) {
                console.log(jqxHR, textStatus, errorThrown);
            });
    });

    $(document).on("click", ".pdelete", function () {
        let id = $(this).attr("id");
        $.ajax({
            url: "Product-delete/" + id,
            type: "DELETE",
            data: { _token: $('input[name="_token"]').val() },
        })
            .done(function (data) {
                tableProduct.ajax.reload();
            })
            .fail(function (jqxHR, textStatus, errorThrown) {
                console.log(jqxHR, textStatus, errorThrown);
            });
    });

    /**
     *
     * For order development only
     *
     */
    let quantiyHold = null;
    let idHold = null;
    let nameHold = null;
    let priceHold = null;
    let options = () => {
        let holdProduct = "";
        $.ajax({
            url: "getProductOption",
            type: "GET",
            dataType: "json",
        })
            .done(function (data) {
                data["data"].forEach((val, i) => {
                    holdProduct += `<option data-subtext="${val.pdescription}" value="${val.id}">${val.pname}</option>`;
                });
                $("#selectProduct").html(holdProduct).selectpicker();
            })
            .fail(function (jqxHR, textStatus, errorThrown) {
                console.log(jqxHR, textStatus, errorThrown);
            });
    };
    options();
    $("#selectProduct").on("change", function () {
        $.ajax({
            url: "Product-show/" + $(this).val(),
            type: "POST",
            dataType: "json",
            data: { _token: $('input[name="_token"]').val() },
        })
            .done(function (data) {
                $("#origPrice").val(data.pprice);
                quantiyHold = data.pquantity;
                priceHold = data.pprice;
                idHold = data.id;
                nameHold = data.pname;
            })
            .fail(function (jqxHR, textStatus, errorThrown) {
                console.log(jqxHR, textStatus, errorThrown);
            });
    });
    $("#enteredQuantity").keyup(function () {
        let enteredQuantity = parseInt(
            isNaN($(this).val()) ? 0 : $(this).val()
        );
        enteredQuantity > quantiyHold
            ? confirm("Sorry, over quanity entered!")
            : $("#computedAmount").val(enteredQuantity * priceHold);
    });
    const arrayproduct = [];
    let tableOrder = () => {
        let e = "";
        arrayproduct.length > 0
            ? arrayproduct.forEach((val, i) => {
                  e += `<tr>
            <td>${val.pname}</td>
            <td>${val.myqty}</td>
            <td>${val.total}</td>
            <td><button class="btn btn-sm btn-danger odelete" id="${i}">X</button></td>
            </tr>`;
              })
            : (e = `<tr><td colspan="4">No product selected</td></tr>`);
        $(".tableOrder").html(e);
        totalAmountVal();
    };
    $(".btnSave").on("click", function () {
        let selectProduct = $("#selectProduct").val();
        let origPrice = $("#origPrice").val();
        let enteredQuantity = $("#enteredQuantity").val();
        let computedAmount = $("#computedAmount").val();
        if (
            selectProduct == "" &&
            origPrice == "" &&
            enteredQuantity == "" &&
            computedAmount == ""
        ) {
            confirm("Pleas Attach atleast one product");
        } else {
            if (arrayproduct.find((val) => val.id == idHold)) {
                confirm("Already Added this Item!");
            } else {
                arrayproduct.push({
                    id: idHold,
                    pname: nameHold,
                    oqty: quantiyHold,
                    myqty: $("#enteredQuantity").val(),
                    total: $("#computedAmount").val(),
                });
                tableOrder();
                $("#selectProduct")
                    .prop("selectedIndex", 0)
                    .selectpicker("refresh");
                $("#origPrice").val("");
                $("#enteredQuantity").val("");
                $("#computedAmount").val("");
            }
        }
    });
    $(document).on("click", ".odelete", function () {
        let i = $(this).attr("id");
        arrayproduct.splice(i, 1);
        tableOrder();
    });
    let totalAmountVal = () => {
        let vals = arrayproduct.reduce((acc, val) => {
            return (acc += parseInt(val.total));
        }, 0);
        $("#grossAmount").val(vals);
    };
    $("#orderForm").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            url: "Order-post",
            type: "POST",
            data: {
                _token: $('input[name="_token"]').val(),
                name: $("#name").val(),
                address: $("#address").val(),
                grossAmount: $("#grossAmount").val(),
                orders: arrayproduct,
            },
        })
            .done(function (data) {
                arrayproduct.splice(0, arrayproduct.length);
                tableOrder();
                tableProduct.ajax.reload();
                CustomerTable.ajax.reload();
                document.getElementById("orderForm").reset();
                console.log(data);
                $(".invoice").slideUp(2000);
            })
            .fail(function (jqxHR, textStatus, errorThrown) {
                console.log(jqxHR, textStatus, errorThrown);
            });
    });
    $(".invoice").hide();
    $("input").keyup(function () {
        let name = $("#name").val();
        let address = $("#address").val();
        name != "" && address !== ""
            ? $(".invoice").slideDown(1000)
            : $(".invoice").slideUp(1000);
    });
});
