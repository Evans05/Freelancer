<?php   
    use yii\helpers\Html; 
    use yii\bootstrap\ActiveForm;  
    ?>   
       
    <style>   
    table th,td{   
        padding: 10px;   
    }   
    </style>   
       
    <?= Html::a('Create', ['child/create'], ['class' => 'btn btn-success']); ?>   
       
    <table border="1">   
       <tr>   
            <th>Name</th>   
            <th>Meaning</th>   
            <th>Gender</th>   
        </tr>   
        <?php foreach($model as $field){ ?>   
        <tr>   
            <td><?= $field->name; ?></td>   
            <td><?= $field->meaning; ?></td>   
            <td><?= $field->gender; ?></td>   
            <td><?= Html::a("Edit", ['child/edit', 'id' => $field->id]); ?> | <?= Html::a("Delete", ['child/delete', 'id' => $field->id]); ?></td>   
        </tr>   
        <?php } ?>  