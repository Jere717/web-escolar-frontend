<?php
include('../../../src/app/config/config.php');

$offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;
$limit = 5;
$category = isset($_GET['category']) ? $_GET['category'] : '';

$sql = "SELECT * FROM tb_posts_blog_escuela";
if (!empty($category)) {
    $sql .= " WHERE category = :category";
}
$sql .= " ORDER BY created_at DESC LIMIT :limit OFFSET :offset";
$stmt = $pdo->prepare($sql);

if (!empty($category)) {
    $stmt->bindParam(':category', $category);
}
$stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
$stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();

$posts = [];
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $posts[] = [
        'id' => htmlspecialchars($row['id']),
        'title' => htmlspecialchars($row['title']),
        'category' => htmlspecialchars($row['category']),
        'image' => '../../../src/uploads/' . htmlspecialchars($row['image']),
        'content' => htmlspecialchars($row['content']),
        'created_at' => date('d/m/Y', strtotime($row['created_at'])),
    ];
}

// Verificar si hay más publicaciones
$hasMorePosts = $stmt->rowCount() == $limit;

// Devolver los resultados en formato JSON
echo json_encode([
    'posts' => $posts,
    'hasMorePosts' => $hasMorePosts
]);