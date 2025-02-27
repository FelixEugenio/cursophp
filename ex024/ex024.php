<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface</title>
</head>
<body>
    <?php 
    
    interface CrudInterface {
        public function create();
        public function list();
        public function update();
        public function delete();
    
    }

    class User implements CrudInterface {
        public function create() {
            // Implementation of create method
        }

        public function list() {
            // Implementation of list method
        }

        public function update() {
            // Implementation of update method
        }

        public function delete() {
            // Implementation of delete method
        }
    }
    
    ?>
    
</body>
</html>