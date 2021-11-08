<nav class="navbar navbar-expand-sm fixed-top">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="mynavbar">
            <a class="navbar-brand" href="/">PrivateLibra.ry</a>
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link {{($title == 'HOME')?'active':''}}" href="/">HOME</a></li>
                <li class="nav-item"><a class="nav-link {{($title == 'BOOK')?'active':''}}" href="{{route('books.index')}}">Book</a></li>
                <li class="nav-item"><a class="nav-link {{($title == 'BOOKSHELF')?'active':''}}" href="{{route('bookshelfs.index')}}">Rack Book</a></li>
                <li class="nav-item"><a class="nav-link {{($title == 'ABOUT')?'active':''}}" href="/about">About</a></li>
            </ul>
        </div>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="darkmode">
            <label class="form-check-label" for="darkmode">Dark Mode</label>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-sm fixed-bottom justify-content-center mt-5">
    <a class="navbar-brand">Created by SPR @ 2021</a>
</nav>
<script>
    var darkSwitch = document.getElementById("darkmode");

    $(document).ready(function() {
        if (localStorage.getItem("darkmode") === "true") {
            darkmode();
        } else {
            lightmode();
        }
    });
    $(document).ready(function() {
        $("#darkmode").on("click", () => {
            if (darkSwitch.checked) {
                darkmode();
                localStorage.setItem("darkmode", "true");
            } else {
                lightmode();
                localStorage.removeItem("darkmode");
            }
        });
        // $("#submit").on("click", () => {
        //     $("#submit").attr('disabled', true).html("<span class='spinner-border spinner-border-sm'></span> Loading...");
        //     setTimeout(function() {
        //         $("#submit").attr('disabled', false).text("Add New Data");
        //     }, 2000);
        // });
    });

    function darkmode() {
        $("body").addClass("bg-dark text-white");
        $("#table").addClass("table-dark");
        $("#tableshow").addClass("table-dark").removeClass("table-light");
        $(".btn-info").addClass("btn-outline-info").removeClass("btn-info");
        $("#rec").removeClass("carousel-dark");
        $(".btn-warning").addClass("btn-outline-warning").removeClass("btn-warning");
        $(".btn-danger").addClass("btn-outline-danger").removeClass("btn-danger");
        $(".btn-success").addClass("btn-outline-success").removeClass("btn-success");
        $(".card-header").addClass("bg-dark").removeClass("bg-light");
        $(".card-body").addClass("bg-secondary");
        $(".modal-header").addClass("bg-secondary");
        $(".modal-body").addClass("bg-dark");
        $(".modal-footer").addClass("bg-dark");
        $(".card-footer").addClass("bg-dark").removeClass("bg-light");
        $("nav").addClass("navbar-dark bg-dark").removeClass("navbar-light bg-light");
        $("label[for='darkmode']").text("Dark Mode").addClass("text-white");
        $("#darkmode").attr('checked', true);
    }

    function lightmode() {
        $(".btn-outline-info").addClass("btn-info").removeClass("btn-outline-info");
        $(".btn-outline-warning").addClass("btn-warning").removeClass("btn-outline-warning");
        $(".btn-outline-danger").addClass("btn-danger").removeClass("btn-outline-danger");
        $(".btn-outline-success").addClass("btn-success").removeClass("btn-outline-success");
        $(".card-header").addClass("bg-light").removeClass("bg-dark");
        $(".card-body").removeClass("bg-secondary");
        $("#rec").addClass("carousel-dark");
        $(".card-footer").addClass("bg-light").removeClass("bg-dark");
        $(".modal-header").removeClass("bg-secondary");
        $(".modal-body").removeClass("bg-dark");
        $(".modal-footer").removeClass("bg-dark");
        $("nav").addClass("navbar-light bg-light").removeClass("navbar-dark bg-dark");
        $("body").removeClass("bg-dark text-white");
        $("#table").removeClass("table-dark");
        $("#tableshow").addClass("table-light").removeClass("table-dark");
        $("label[for='darkmode']").text("Light Mode").removeClass("text-white");
        $("#darkmode").attr('checked', false);
    }
</script>
