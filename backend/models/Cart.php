<?php
class Cart
{
    private $conn;
    private $table = 'Cart';

    public $email;
    public $ISBN;


    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function add_to_cart($email, $ISBN)
    {
        // Check if the book is already in the cart for the user
        $query = 'SELECT * FROM Cart WHERE email = ? AND ISBN = ?';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $this->ISBN);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return false; // Book is already in the cart
        }

        // Insert the book into the cart table
        $query = 'INSERT INTO Cart (email, ISBN) VALUES (?, ?)';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $this->ISBN);

        if ($stmt->execute()) {
            return true; // Book added to cart successfully
        } else {
            return false; // Error adding book to cart
        }
    }

    public function read_cart($email) {
        $query = "SELECT book.`ISBN`, `title`, `price`, `description`, `cover_photo` FROM cart, book where cart.ISBN = book.ISBN "
        ."and cart.email = ? GROUP BY book.ISBN;";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $email);
        $stmt->execute();
        $result = $stmt;
        $count = $result->rowCount();
        if($count > 0) {
            $books_arr = array();
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $books_arr[$row['ISBN']] = array(
                    'title'=>$row['title'],
                    'price'=>$row['price'],
                    'cover_photo'=>$row['cover_photo'],
                    'description'=>$row['description'],
                );
            }
            $this->email = $email;
            return $books_arr;
        } else {
            echo "<p>No books found</p>";
        }
    }

    public function delete_cart($ISBN, $email) {
        $query = 'DELETE from Cart WHERE ISBN = ? AND email = ?';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $ISBN);
        $stmt->bindParam(2, $email);
        return $stmt->execute();
    }

    public function checkout($num_copies, $ISBN, $email) {
        $query = "SELECT num_copies FROM book where ISBN = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $ISBN);
        $stmt->execute();
        $result = $stmt;
        $record = $result->fetch(PDO::FETCH_ASSOC);

        if ($num_copies > $record['num_copies']) {
            return false;
        }

        $query = "INSERT INTO Purchase_Record (`email`, `ISBN`, `num_copies`)VALUES (?, ?, ?)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $ISBN);
        $stmt->bindParam(3, $num_copies);
        
        if(!$stmt->execute()) {
            return false;
        }

        $num_copies = $record['num_copies'] - $num_copies;
        $query = "UPDATE book SET num_copies = ? WHERE ISBN = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $num_copies);
        $stmt->bindParam(2, $ISBN);
        if(!$stmt->execute()) {
            return false;
        }
        return true;
    }
}
