<?php
/* Smarty version 3.1.32, created on 2020-07-09 13:38:35
  from 'C:\xampp\htdocs\wifisan-dashboard\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f07480b081362_07037341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dd54b472530eaa49a38978e4cf30a43e1bc4472' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wifisan-dashboard\\templates\\footer.tpl',
      1 => 1594312713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f07480b081362_07037341 (Smarty_Internal_Template $_smarty_tpl) {
?></div>
<!-- /#page-content-wrapper -->
</div>
</div>
</div>
</div>

<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/10f428514a.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
    var ctx = document.querySelectorAll('.myChart').forEach( r => {
        r.getContext('2d');
    var myChart = new Chart(r, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgb(172,225,249)',
                    'rgb(20,171,239)',
                    'rgb(98,29,209)',
                    'rgb(51,96,242)',
                    'rgb(0,123,254)',
                    'rgb(6,22,58)'
                ]
                
                }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    });

    var ctx1 = document.querySelectorAll('.myChart1').forEach( r => {
        r.getContext('2d');
    var data = {
    datasets: [{
        data: [10, 20, 30],
           backgroundColor: [
                    'rgb(251,165,64)',
                    'rgb(209,58,223)',
                    'rgb(20,171,239)'
                ],
    }],
  

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
        'Red',
        'Yellow',
        'Blue'
    ]
};
    var myPieChart = new Chart(r, {
    type: 'pie',
    data: data,
    
    });
    });
<?php echo '</script'; ?>
><?php }
}
