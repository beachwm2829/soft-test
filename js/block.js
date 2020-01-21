
            function azz(){
                 var user = document.formjs.mUser.value;
                 var pass = document.formjs.mPass.value;
                 var fname = document.formjs.mName.value;
                 var letters = /^[A-Za-zก-ฮะ-ูเ-์]+$/; 
                 var num = /^[0-9]+$/;
                 var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                 var users = /^[A-Za-z0-9]+$/;
                if( pass == "" && user == "" && fname == ""){
                    alert("กรอกไม่ครบ");
                    return false;
                }
                else if(pass == ""){
                     alert("ไม่ใส่รหัสผ่าน");
                     return false;
                }
                else if(user == ""){
                     alert("ไม่ใส่user");
                     return false;
                }
                else if(fname == ""){
                     alert("ไม่กรอกชื่อ");
                     return false;
                }
                else{
                    if(fname.match(letters)){}
                    else{
                        alert("ชื่อไม่ถูกอักขระ");
                        return false;
                    }
                    if(user.match(users)){
                        if(user.length<8){
                            alert("Username 8 ตัวขึ้นไป");
                            return false;
                        }
                    }
                    else{
                        alert("Username ภาษาอังกฤษและตัวเลขเท่านั้น");
                        return false;
                    }
                    if(pass.match(users)){
                        if(pass.length<8){
                            alert("password 8 ตัวขึ้นไป");
                            return false;
                        }
                    }
                    else{
                        alert("password ภาษาอังกฤษและตัวเลขเท่านั้น");
                        return false;
                    }
                }
        }
        function login(){
                 var user = document.formjs.user.value;
                 var pass = document.formjs.pass.value;
                if( pass == ""|| user == ""){
                    alert("กรอกไม่ครบ");
                    return false;
                }
        }
     

