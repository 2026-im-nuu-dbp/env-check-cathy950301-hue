<?php
// 學習多媒體程式設計的目標
$goals = [
    "1. 基礎知識 - 理解多媒體概念和格式",
    "2. 技術能力 - 掌握多媒體處理技術",
    "3. 應用開發 - 開發互動式應用程式",
    "4. 創意設計 - 提升設計能力",
    "5. 實踐能力 - 完成實際項目"
];
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>學習多媒體程式設計的目標</title>
</head>
<body>
    <h1>學習多媒體程式設計的目標</h1>
    <ul>
        <?php foreach ($goals as $goal): ?>
            <li><?php echo $goal; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
