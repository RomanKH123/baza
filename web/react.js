function connekt(){
    if (document.getElementById("React_a").value == "student" && document.getElementById("React_b").value == "student"){
        document.getElementById('ewe').style.display = 'none';       
    }else{
        document.getElementById('errorb').style.display = 'block';
        document.getElementById('tap').style.paddingBottom = '4vh'; 
    }
}
var epxe = document.getElementById("root")
function Loggin(){
        
        return(
            <div className="React_Log" Id = "ewe">
                <div id = "tap" className="Tap">
                    <input Placeholder="Логин" Type = "text" Id="React_a" className="React_Input_a"></input>
                    <input Placeholder="Пароль" Type = "password" Id="React_b" className="React_Input_a"></input>
                    <button onClick = {connekt} className="React_Input_a">Войти</button>
                    <div Id = "errorb" className="React_error">Неправильный Логин или Пароль</div>
                </div>
            </div>
        )
    
}


ReactDOM.render(
    Loggin(),epxe
);