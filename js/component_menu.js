class menumain extends HTMLElement{
    constructor(){
        super();
    }
    connectedCallback(){
        this.innerHTML = `

        <img class="animacionLogo" src="../img/ico/logo.png" alt="logo">
            <nav>
                <ul>
                    <li><a href="modulo6.php"><lord-icon class="icon"
                    src="https://cdn.lordicon.com/lqadwfir.json"
                    trigger="hover"
                    stroke="bold"title="COTIZAR VIDRIO">
                    </lord-icon></a></li>
                    <li><a href="modulo1.php"><lord-icon class="icon" onclick="act_mod1()"
                        src="https://cdn.lordicon.com/iawrhwdo.json"
                        trigger="hover" title="PLANEACION PRESUPUESTAL DEL MES" >
                    </lord-icon></a></li>
                    <li><a href="modulo2.php"><lord-icon class="icon"
                        src="https://cdn.lordicon.com/ksdjzsym.json"
                        trigger="hover" title="REGISTRO DE INGRESO Y GASTOS" >
                    </lord-icon></a></li>
                    <li><a href="modulo3.php"><lord-icon class="icon"
                        src="https://cdn.lordicon.com/wzwygmng.json"
                        trigger="hover" title="ADMINISTRA TUS CATEGORIAS" >
                    </lord-icon></a></li> 
                    <li><a href="modulo4.php"><lord-icon class="icon"
                        src="https://cdn.lordicon.com/iiuaqmnt.json"
                        trigger="hover" title="CALCULADORA DE INTERES COMPUESTO" >
                    </lord-icon></a></li>
                   <!-- <li><a href="modulo5.php"><lord-icon class="icon"
                        src="https://cdn.lordicon.com/abwrkdvl.json"
                        trigger="hover" title="DASHBOARD DE SEGUIMIENTO GLOBALIZADO">
                    </lord-icon></a></li>-->
                   
                </ul>
             </nav>
             <div class="exit">
                <a href="../db/logout.php">
                <lord-icon class="icon"
                    src="https://cdn.lordicon.com/gwvmctbb.json"
                    trigger="hover"
                    colors="primary:#b4b4b4,secondary:#b4b4b4" title="SALIR" ></lord-icon>
                </lord-icon>

             </div>
        
        
        `;
    }
}

window.customElements.define("menu-main", menumain);