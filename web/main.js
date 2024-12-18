function connekt(){
    if (document.getElementById("React_a").value == "student" && document.getElementById("React_b").value == "student"){
        window.location.href = "/index_2.php"      
    }else{
        document.getElementById('errorb').style.display = 'block';
        document.getElementById('tap').style.paddingBottom = '4vh'; 
    }
}
