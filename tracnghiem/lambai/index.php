<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Làm bài thi trắc nghiệm</title>

<!-- jquery cdn-->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<!-- cdn v3 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="panel-ground">
            <div class="panel panel-warning" style="background-color:antiquewhite">
                <div class="panel-heading" style="color:red;text-align:center;font-size:30px;font-weight:bold">Làm bài thi</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12 text-right">
                            <button type="button" name="button" class="btn btn-primary" id="btnStart">Bắt đầu</button>
                        </div>
                    </div>
                    <div id="questions">
                    </div>
                    <div class="row">
                          <!-- Button to Open the Modal -->
                        <div class="col-sm-12 text-center">
                            <button type="button" id="btnFinish" class="btn btn-primary" name="button" data-toggle="modal" data-target="#myModal">
                            Kết thúc bài làm
                            </button>
                        </div>
                    </div>
                   
                </div>

                <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content"style="background-color:bisque;">
      
        <!-- Modal Header -->
        <div class="modal-header" style="background-color:bisque">
          <h4 class="modal-title" style="text-align:center;font-size:30px;font-weight:bold;color:red">Kết thúc bài làm</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">   
                <div>
                    <h4 id="mark"></h4>
                </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

            </div>
        </div>
    </div>
</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $('#btnFinish').hide();
    });

    var questions;

    $('#btnStart').click(function(){
        GetQuestions();
        $('#btnFinish').show();
        $(this).hide();
    });

    $('#btnFinish').click(function(){
        $(this).hide();
        $('#btnStart').show();
        CheckResult();
    });

    function CheckResult(){
        let mark=0;
        $('#questions div.row').each(function(k,v){

            let id = $(v).find('h5').attr('id');
            let question = questions.find(x=>x.id == id);
            let answer = question['answer'];
            console.log(answer);

            let choice = $(v).find('fieldset input[type="radio"]:checked').attr('class');
            console.log(choice);
            if(choice == answer){
                mark +=2;
            }else{
                console.log('Câu có id: '+id+' Sai');
            }
            $('#question_'+id+' > fieldset > div > label.'+answer).css("background-color", "yellow");
        });
        $('#mark').text('Điểm của bạn là: '+mark);
    }

    function GetQuestions(){
        $.ajax({
            url:'questions.php',
            type:'get',
            success:function(data){
            questions =jQuery.parseJSON(data);
            let index = 1;
            let d = '';
            $.each(questions,function(k,v){
        d+=   '<div class="row" style = "margin-left:10px;" id="question_'+v['id']+'"> ';
        d+=   '<h5 style="font-weight:bold;" id="'+v['id']+'"> <span style="color:red">Câu '+index+': </span>'+v['question']+'</h5>';

        d +=   '<fieldset>';
        d+=   '<div class="radio col-md-12 ">';
        d+=    '<label class = "A"><input type="radio" class="A" name = "'+v['id']+'"><span class="text-danger">A: </span>'+v['option_a']+'</label>';
        d+=   '</div>';

        d+=  ' <div class="radio col-md-12">';
        d+=     '<label class = "B"><input type="radio" class="B" name = "'+v['id']+'"><span class="text-danger">B: </span>'+v['option_b']+'</label>';
        d+=   '</div>';

        d+=   '<div class="radio  col-md-12">';
        d+=     '<label class = "C"><input type="radio"  class="C" name = "'+v['id']+'"><span class="text-danger">C: </span>'+v['option_c']+'</label>';
        d+=   '</div>';

        d+=   '<div class="radio col-md-12">';
        d+=     '<label class = "D"><input type="radio" class="D" name = "'+v['id']+'"><span class="text-danger">D: </span>'+v['option_d']+'</label>';
        d+=   '</div>';
        d+=  '</fieldset>';
        d+= '</div>';
        index++;
      });
            $('#questions').html(d);
            }
        });
    }

</script>