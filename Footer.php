<button onclick="topFunction()" id="myBtn" class="btn" title="Go to top"><span>Į Viršų</span></button>

<script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<!--- Footer -->


<footer>
    <div>


    <div class="uniq">
        © <a href="">Motoclub.lt</a> | 2021
    </div>
   


    </div>

</footer>
