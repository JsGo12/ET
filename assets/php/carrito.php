<?php
session_start();
include 'conexion_be.php';

function addToCart($conn) {
    $nombre_producto = $_POST['nombre_producto'];
    $precio_unitario = $_POST['precio_unitario'];
    $cantidad = $_POST['cantidad'];
    $precio_total = $precio_unitario * $cantidad;
    
    $sql = "INSERT INTO carro (nombre_producto, precio_unitario, cantidad, precio_total) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sdid", $nombre_producto, $precio_unitario, $cantidad, $precio_total);
    
    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Servicio agregado al carrito"]);
    } else {
        echo json_encode(["success" => false, "message" => "Error al agregar al carrito"]);
    }
    
    $stmt->close();
}

function getCart($conn) {
    $sql = "SELECT * FROM carro";
    $result = $conn->query($sql);

    $cart_items = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $cart_items[] = $row;
        }
    }

    echo json_encode($cart_items);
}

function removeFromCart($conn) {
    $id = $_POST['id'];
    
    $sql = "DELETE FROM carro WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Item eliminado del carrito"]);
    } else {
        echo json_encode(["success" => false, "message" => "Error al eliminar del carrito"]);
    }
    
    $stmt->close();
}

function getCartCount($conn) {
    $sql = "SELECT COUNT(*) as count FROM carro";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode(["count" => $row['count']]);
    } else {
        echo json_encode(["count" => 0]);
    }
}

// Determinar qué operación realizar basado en el parámetro 'action'
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'add':
            addToCart($conn);
            break;
        case 'get':
            getCart($conn);
            break;
        case 'remove':
            removeFromCart($conn);
            break;
        case 'count':
            getCartCount($conn);
            break;
        default:
            echo json_encode(["error" => "Acción no válida"]);
    }
} else {
    echo json_encode(["error" => "No se especificó ninguna acción"]);
}

$conn->close();
?>