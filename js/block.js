
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
        function addmovie(){
            var Date = document.formjs.Date_in.value;
            var time = document.formjs.time_movie.value;
            var Moviename = document.formjs.Moviename.value;
            var detail = document.formjs.detail.value;
            var group = document.formjs.group_movie.value;
            var num = /^[0-9/.-]+$/;
            if( Date == "" && time == "" && Moviename == "" && detail == ""){
                    alert("กรอกไม่ครบ");
                    return false;
                }
                else if(Date == ""){
                     alert("ไม่ระบุวันที่เข้าฉาย");
                     return false;
                }
                else if(time == ""){
                     alert("ไม่ระบุเวลาที่เข้าฉาย");
                     return false;
                }
                else if(Moviename == ""){
                     alert("ไม่กรอกชื่อหนัง");
                     return false;
                }
                else if(detail == ""){
                     alert("ไม่กรอกรายระเอียดหนัง");
                     return false;
                }
                else if(group == ""){
                     alert("ไม่ได้ระบุกลุ่มของหนัง");
                     return false;
                }
                else{
                    if(Date.match(num)){}
                    else{
                        alert("ใส่วันเข้าฉายให้ถูกอักขระ ว/ด/ป ตัวอย่าง 12/1/2020");
                        return false;
                    }
                    if(time.match(num)){}
                    else{
                        alert("ใส่เวลาเข้าฉายให้ถูกอักขระ 24hr ตัวอย่าง 13.30");
                        return false;
                    }
                }
        }
        function search(){
                 var traget = document.formjs1.traget.value;
                if( traget == ""){
                    alert("กรุณากรอกข้อมูล");
                    return false;
                }
        }
        function addpoin(){
                 var mid = document.formjs.mid.value;
                 var point = document.formjs.point.value;
                 var num = /^[0-9]+$/;
                if( mid == "" && point == ""){
                    alert("กรุณากรอกข้อมูล");
                    return false;
                }
                else if(mid == ""){
                     alert("กรุณาระบุสมาชิก");
                     return false;
                }
                else if(point == ""){
                     alert("กรุณาระบุ point");
                     return false;
                }
                 else{
                    if(point.match(num)){}
                    else{
                        alert("point เป็นตัวเลขเท่านั้น");
                        return false;
                    }
        }
    }
        function Editpoin(){
                 var mid = document.formjs1.mid.value;
                 var point = document.formjs1.point.value;
                 var num = /^[0-9]+$/;
                if( mid == "" && point == ""){
                    alert("กรุณากรอกข้อมูล");
                    return false;
                }
                else if(mid == ""){
                     alert("กรุณาระบุสมาชิก");
                     return false;
                }
                else if(point == ""){
                     alert("กรุณาระบุ point");
                     return false;
                }
                 else{
                    if(point.match(num)){}
                    else{
                        alert("point เป็นตัวเลขเท่านั้น");
                        return false;
                    }
        }
    }
    function Editpoin(){
                 var mid = document.formjs1.mid.value;
                 var point = document.formjs1.point.value;
                 var num = /^[0-9]+$/;
                if( mid == "" && point == ""){
                    alert("กรุณากรอกข้อมูล");
                    return false;
                }
                else if(mid == ""){
                     alert("กรุณาระบุสมาชิก");
                     return false;
                }
                else if(point == ""){
                     alert("กรุณาระบุ point");
                     return false;
                }
                 else{
                    if(point.match(num)){}
                    else{
                        alert("point เป็นตัวเลขเท่านั้น");
                        return false;
                    }
        }
    }
    function addkaa(){
                 var Cinema_ID = document.formjs.Cinema_ID.value;
                 var Cinema_Name = document.formjs.Cinema_Name.value;
                 var Cinema_County = document.formjs.Cinema_County.value;
                 var num = /^[A-Za-zก-ฮะ-ูเ-์]+$/;
                 var num1 = /^[0-9]+$/;
                if( Cinema_ID == "" && Cinema_Name == "" && Cinema_County==""){
                    alert("กรุณากรอกข้อมูล");
                    return false;
                }
                else if(Cinema_ID == ""){
                     alert("กรุณาระบุรหัสโรงหนัง");
                     return false;
                }
                else if(Cinema_Name == ""){
                     alert("กรุณาระบุชื่อโรงหนัง");
                     return false;
                }
                else if(Cinema_County == ""){
                     alert("กรุณาระบุชื่อจังหวัด");
                     return false;
                }
                 else{
                    if(Cinema_Name.match(num)&&Cinema_County.match(num)){
                        
                    }
                    else{
                        alert("ชื่อโรงหนังเเละจังหวัดอย่ากรอกตัวเลข");
                        return false;
                    }
                    if(Cinema_ID.match(num1)){
                        
                    }
                    else{
                        alert("รหัสโรงหนังเป็นตัวเลขเท่านั้น");
                        return false;
                    }
        }
    }  
