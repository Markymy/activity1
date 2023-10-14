
<!DOCTYPE html>
<html lang="en">
<head>
    <div class="topnav">
    <a class="active" href="#ROCABERTE">ROCABERTE</a>
    <a href="#MANAGE">MANAGE</a>
    <a href="#MENU">MENU</a>
    </div>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <form action="addMenu.php" method="POST" id="menuForm">
        <div class="mb-3">
            <label for="menuName" class="form-label">Menu Name</label>
            <input type="text" class="form-control" id="menuName" name="menuName" maxlength="100" required>
        </div>
        <div class="mb-3">
            <label for="menuDescription" class="form-label">Menu Description</label>
            <textarea class="form-control" id="menuDescription" name="menuDescription" maxlength="1000" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 
    <script src="script.js"></script>
</body>
</html>

