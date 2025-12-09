document.getElementById("myForm").addEventListener("submit", function (event) {
            // Ngăn chặn hành động gửi form mặc định
            event.preventDefault();

            let isValid = true; 

            function clearError(fieldId) {
                document.getElementById(fieldId + "-error").textContent = "";
            }

            function showError(fieldId, message) {
                document.getElementById(fieldId + "-error").textContent = message;
                isValid = false; 
            }

            const name = document.getElementById("name").value.trim();
            const email = document.getElementById("email").value.trim();
            const city = document.getElementById("city").value.trim();
            const note = document.getElementById("note").value.trim();
            
            clearError("name");
            clearError("email");
            clearError("city");
            clearError("note");
            
            if (name === "") {
                showError("name", "⚠️ Vui lòng nhập Họ tên!");
            }

            if (email === "") {
                showError("email", "⚠️ Vui lòng nhập Email!");
            }
           
            if (city === "") {
                showError("city", "⚠️ Vui lòng nhập Thành phố!");
            }

            if (isValid) {
                
                console.log("✅ Dữ liệu Hợp lệ!");
                console.log("Họ tên: " + name);
                console.log("Email: " + email);
                console.log("Thành phố: " + city);
                console.log("Ghi chú: " + note);
                
           
                alert("Đăng ký thành công! (Dữ liệu đã được in ra console)");
                document.getElementById("myForm").reset(); 
            } else {
                console.log("❌ Form không hợp lệ. Vui lòng kiểm tra các lỗi.");
            }
        });