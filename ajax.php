<script>
    function deletePost(address) {

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById("row").innerHTML = xhr.responseText;
            }
        }

        xhr.open("GET", address , true)
        xhr.send();

    }
</script>