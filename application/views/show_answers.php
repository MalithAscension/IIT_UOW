<?php $this->load->view('nav_header'); ?>



<section class="question-area pt-10px pb-10px">
    <div class="container">
        <br>

        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                <span class="created-date_ans"><b>Date : <?php echo $questions_details->created_date; ?></b></span>
                <span class="created-date"><b><a href="<?php echo base_url('home'); ?>"> Go back</a></span>
                <div class="question-tabs mb-20px">
                    <div class="tab-content pt-20px" id="myTabContent">
                        <div class="tab-pane fade show active" id="questions" role="tabpanel" aria-labelledby="questions-tab">
                            <div class="question-main-bar">
                                <div class="questions-snippet">
                                    <div>
                                        <div class="media media-card-sub media--card align-items-center" style="border: 3px solid #892deb;">
                                            <div class="media-body">
                                                <h5 style="text-align: center;">Q1 :
                                                    <a data-bs-toggle="modal" data-bs-target="#questionEditModal">
                                                        <u><?php echo $questions_details->question; ?></u>
                                                    </a>
                                                </h5><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
            </div>
        </div>



        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                <?php if ($this->session->flashdata('Success')) : ?>
                    <div class="alert success" id="successAlert">
                        <span class="closebtn">&times;</span>Successfully added a answer !
                    </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('UpdatedAnswer')) : ?>
                    <div class="alert success" id="successAlert">
                        <span class="closebtn">&times;</span>Successfully answer updated !
                    </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('UpdatedQuestion')) : ?>
                    <div class="alert success" id="successAlert">
                        <span class="closebtn">&times;</span>Successfully question updated !
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-2">
            </div>
        </div>



        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-4">
                <button class="btn btn-outline-primary custom-button-answer my-2 my-sm-0" data-bs-toggle="modal" data-bs-target="#answerModal">Answer</button>
            </div>
            <div class="col-lg-4">
                <div style="text-align: right;">
                    <?php
                        foreach ($answer_tags as $tag_obj) {
                            $tags = explode(',', $tag_obj->tags);
                            foreach ($tags as $tag) {
                                $tag = trim($tag);
                                echo '<span class="tag-link" style="background-color: #d4c3e6;">#' . $tag . '</span> ';
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="col-lg-2">
            </div>
        </div>



        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                <div class="question-tabs mb-50px">
                    <div class="tab-content pt-20px" id="myTabContent">
                        <div class="tab-pane fade show active" id="questions" role="tabpanel" aria-labelledby="questions-tab">
                            <div class="question-main-bar">
                                <div class="questions-snippet">
                                    <?php foreach ($answers as $ans) : ?>
                                        <?php
                                        $createdDateTime = new DateTime($ans->created_date);
                                        $currentDateTime = new DateTime();
                                        $timeDiff = $createdDateTime->diff($currentDateTime);
                                        $timeDiffStr = $timeDiff->format('%h hours ago');
                                        ?>
                                        <div class="media media-card media--card align-items-center" style="border: 1px solid #892deb;">
                                            <div class="votes">
                                                <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                    <span class="vote-counts">1</span>
                                                    <span class="vote-icon"></span>
                                                </div>
                                                <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                    <span class="vote-counts">2</span>
                                                    <span class="answer-icon"></span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5><a href="" data-bs-toggle="modal" data-bs-target="#answerEditModal" data-answer="<?php echo $ans->answer; ?>" data-answer-id="<?php echo $ans->answer_id; ?>"><?php echo $ans->answer; ?></a></h5><br>
                                                <small class="meta">
                                                    <span class="pe-1"><?php echo $timeDiffStr; ?></span>
                                                    <a href="" class="author"><?php echo $ans->created_user; ?></a>
                                                </small>
                                                <div class="tags">
                                                    <a href="#" class="tag-link">#css</a>
                                                    <a href="#" class="tag-link">#bootstrap-4</a>
                                                    <a href="#" class="tag-link">#grid</a>
                                                    <a href="#" class="tag-link">#resize</a>
                                                    <span class="created-date"><?php echo $ans->created_date; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
            </div>
        </div>
    </div>
</section>








<div class="modal fade modal-container login-form" id="answerModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #dedede;">
            <div class="modal-header align-items-center">
                <h3 class="modal-title" id="loginModalTitle">Answer</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('add_answers'); ?>" method="post">
                    <div class="form-group">
                        <textarea name="answer" id="answer" rows="7" class="form-control" style="background-color: #cbd3f5;" placeholder="Type your answer....."></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn theme-btn w-30">Submit<i class="la la-arrow-right icon ms-1"></i></button>
                    </div>
                    <input type="text" id="question_id" name="question_id" value="<?php echo $questions_details->question_id; ?>" hidden>
                </form>
            </div>
        </div>
    </div>
</div>





<div class="modal fade modal-container login-form" id="questionEditModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #dedede;">
            <div class="modal-header align-items-center">
                <h3 class="modal-title" id="loginModalTitle">Edit Question</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('update_question'); ?>" method="post">
                    <div class="form-group">
                        <textarea name="question" id="question" rows="7" class="form-control" style="background-color: #cbd3f5;"><?php echo $questions_details->question; ?></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn theme-btn w-30">Update<i class="la la-arrow-right icon ms-1"></i></button>
                    </div>
                    <input type="text" id="question_id" name="question_id" value="<?php echo $questions_details->question_id; ?>" hidden>
                </form>
            </div>
        </div>
    </div>
</div>





<div class="modal fade modal-container login-form" id="answerEditModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #dedede;">
            <div class="modal-header align-items-center">
                <h3 class="modal-title" id="loginModalTitle">Edit Answer</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('update_answer'); ?>" method="post">
                    <div class="form-group">
                        <textarea name="answer" id="answer_text" rows="7" class="form-control" style="background-color: #cbd3f5;"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn theme-btn w-30">Update<i class="la la-arrow-right icon ms-1"></i></button>
                    </div>
                    <input type="text" name="answer_id" id="answer_id" hidden>
                    <input type="text" id="question_id" name="question_id" value="<?php echo $questions_details->question_id; ?>" hidden>
                </form>
            </div>
        </div>
    </div>
</div>





<br><br><br><br><br><br>
<?php $this->load->view('nav_footer'); ?>
</body>
</html>


<script>
    var close = document.getElementsByClassName("closebtn");
    var i;
    for (i = 0; i < close.length; i++) {
        close[i].onclick = function() {
            var div = this.parentElement;
            div.style.opacity = "0";
            setTimeout(function() {
                div.style.display = "none";
            }, 300);
        }
    }
    setTimeout(function() {
        var successAlert = document.getElementById("successAlert");
        successAlert.style.opacity = "0";
        setTimeout(function() {
            successAlert.style.display = "none";
        }, 300);
    }, 5000);





    $(document).ready(function() {
        $('#answerEditModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var answer = button.data('answer');
            var answerId = button.data('answer-id');
            $('#answer_text').val(answer);
            $('#answer_id').val(answerId);
        });
    });
</script>