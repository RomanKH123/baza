function connekt(){
    if (document.getElementById("React_a").value == "student" && document.getElementById("React_b").value == "student"){
        document.getElementById('ewe').classList.remove('React_Log');
        document.getElementById('ewe').classList.add('React_Log_b');        
    }else{
        document.getElementById('errorb').classList.remove('React_error_a');
        document.getElementById('errorb').classList.add('React_error_b'); 
    }
}
var epxe = document.getElementById("root")
class Loggin extends React.Component{
    
    render(){
        return(
            <div className="React_Log" Id = "ewe">
                <div className="Tap">
                    <input Placeholder="Логин" Type = "text" Id="React_a" className="React_Input_a"></input>
                    <input Placeholder="Пароль" Type = "password" Id="React_b" className="React_Input_a"></input>
                    <button onClick = {connekt} className="React_Input_a">Войти</button>
                    <div Id = "errorb" className="React_error_a">Неправильный Логин или Пароль</div>
                </div>
            </div>
        )
    }
}


ReactDOM.render(
    <Loggin/>,epxe
);