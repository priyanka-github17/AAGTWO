<script src="assets/js/jquery-latest.js"></script>
<script src="assets/js/mag-popup.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    var getteamchat, getchat;

    $(function() {
        setTimeout(function() {
            $('body').addClass('loaded');
        }, 1000);

        updateEvent('<?= $userid ?>', '<?= $curr_room ?>');
        updateAttendance();
        setInterval(function() {
            checkfornewchat('<?= $userid ?>');
        }, 60000);

        $('#selectAudi').on('click', function() {
            $('#audiSelect').modal('show');
        });
        $('.view').magnificPopup({
            disableOn: 700,
            type: 'image',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false
        });

        $('.viewvideo').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            closeBtnInside: true,

            fixedContentPos: false
        });

        $('.showpdf').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false
        });
        $('.viewpoppdf').magnificPopup({
            type: 'iframe',
            callbacks: {
                open: function() {
                    $('#resourcesList').modal('hide');
                },
                close: function() {
                    $('#resourcesList').modal('show');
                }
            },
            iframe: {
                markup: '<div class="mfp-iframe-scaler">' +
                    '<div class="mfp-close"></div>' +
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                    '<div class="mfp-title"></div>' +
                    '</div>'
            },
            removalDelay: 300,
            mainClass: 'mfp-fade'

        });
        $('.playGames').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'playGames',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });


        $(document).on('click', '.show_attendees', function() {
            $('#attendees').modal('show');
        });
        $('#attendees').on('hidden.bs.modal', function(e) {})
        $('#attendees').on('show.bs.modal', function(e) {
            getOnlineAttendees('', '1');
        })

        $(document).on('click', '#refresh-attendees', function() {
            var keyword = $('#attendee-search').val();

            getOnlineAttendees(keyword, '1');
        });
        $(document).on('click', '#search-attendee', function() {
            var keyword = $('#attendee-search').val();
            getOnlineAttendees(keyword, '1');
            return false;
        });
        $(document).on('click', '#clear-search-attendee', function() {
            $('#attendee-search').val('');
            getOnlineAttendees('', '1');
            return false;
        });

        $(document).on('click', '.show_leaderboard', function() {
            $('#leaderboard').modal('show');
        });

        $('#leaderboard').on('show.bs.modal', function(e) {
            getMyRank('<?= $_SESSION['userid'] ?>');
            getLeaderboard();
        });
        $(document).on('click', '#lRanks', function() {
            $('#pointsSystem').removeClass('active');
            $('#lRanks').addClass('active');
            $('#ranks').css('display', 'block');
            $('#points').css('display', 'none');
            getLeaderboard();
        });

        $(document).on('click', '#pointsSystem', function() {
            $('#lRanks').removeClass('active');
            $('#pointsSystem').addClass('active');
            $('#points').css('display', 'block');
            $('#ranks').css('display', 'none');
        });

        $('#talktous').dialog({
            dialogClass: "talktoteam",
            autoOpen: false,
            title: 'Talk to Team Integrace',
            position: {
                my: "center center",
                at: "center center"
            },
            beforeClose: function(event, ui) {
                clearInterval(getteamchat);
            }
        });
        $(document).on('click', '#show_talktous', function() {
            var to_user_id = 'team';
            var from_user_id = $(this).data('from');
            getTeamChatHistory(to_user_id, from_user_id);
            $('#talktous').dialog('open');
            getteamchat = setInterval(function() {
                getTeamChatHistory(to_user_id, from_user_id);
            }, 5000);
        });

        $(document).on('click', '.send_teamchat', function() {
            var sendbtn = document.querySelector('.send_teamchat');
            sendbtn.disabled = true;
            var to_user_id = 'team';
            var from_user_id = $(this).data('from');
            var from_src = $(this).data('src');
            var message = $('#chat_message_' + to_user_id).val();

            if (message.trim() !== '') {
                $.ajax({
                    url: 'control/chat.php',
                    data: {
                        action: 'sendTeamMessage',
                        to: to_user_id,
                        from: from_user_id,
                        msg: message,
                        source: from_src
                    },
                    type: 'post',
                    success: function() {
                        $('#chat_message_' + to_user_id).val('');
                        getTeamChatHistory(to_user_id, from_user_id)
                    }
                });
            }
            sendbtn.disabled = false;
            return false;
        });

        $(document).on('click', '.btn-chat', function() {
            var to_user_id = $(this).data('to');
            var from_user_id = $(this).data('from');
            var to_user;
            $.ajax({
                    url: "control/users.php",
                    data: {
                        action: 'getAttendeeName',
                        userId: to_user_id
                    },
                    type: 'post',
                    dataType: "text",
                    async: false

                })
                .done(function(data) {
                    console.log(data);
                    to_user = data;
                });
            /* .fail(function() {})
            .always(function(data) {
                to_user = data;
            }); */
            getChatHistory(to_user_id, from_user_id);
            getchat = setInterval(function() {
                getChatHistory(to_user_id, from_user_id);
            }, 6000);
            make_chat_box(to_user_id, from_user_id);
            $('#chat_' + to_user_id).dialog({
                dialogClass: "attendeechat",
                autoOpen: false,
                width: 400,
                height: 400,
                title: 'Chat with ' + to_user,
                position: {
                    my: "right-100px top",
                    at: "right bottom-100px"
                }

            });
            console.log(to_user);
            $('#attendees').modal('hide');
            $('#chat_' + to_user_id).dialog('open');

            $('#chat_' + to_user_id).dialog({
                close: function() {
                    clearInterval(getchat);
                    $(this).remove();
                }
            });
            $(this).next('span').hide();
        });

        $(document).on('click', '.send_chat', function() {
            var sendbtn = document.querySelector('.send_chat');
            sendbtn.disabled = true;
            var to_user_id = $(this).data('to');
            var from_user_id = $(this).data('from');
            var message = $('#chat_message_' + to_user_id).val();
            if (message.trim() !== '') {
                $.ajax({
                    url: "control/chat.php",
                    data: {
                        action: 'sendMessage',
                        to: to_user_id,
                        from: from_user_id,
                        msg: message
                    },
                    type: 'post',
                    success: function(response) {
                        $('#chat_message_' + to_user_id).val('');
                        getChatHistory(to_user_id, from_user_id);
                    }
                });
            }
            sendbtn.disabled = false;
        });

        $(document).on('click', '.btn-share', function() {
            var to_user_id = $(this).data('to');
            var from_user_id = $(this).data('from');

            Swal.fire({
                text: 'Do you want to share your E-card?',
                //text: "You won't be able to revert this!",
                // icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                cancelButtonText: 'No'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: 'control/users.php',
                        data: {
                            action: 'shareCard',
                            to: to_user_id,
                            from: from_user_id
                        },
                        type: 'post',
                        success: function(response) {
                            console.log(response);
                            if (response === '-1') {
                                //alert('You have already shared E-card!');
                                Swal.fire(
                                    'Sorry',
                                    'You have already shared E-card!',
                                    'error'
                                )
                            } else
                            if (response === 'done') {
                                //alert('Your E-card has been sent successfully!');
                                Swal.fire(
                                    'Thank you!',
                                    'Your E-card has been sent successfully!',
                                    'success'
                                )
                            } else {
                                //alert('Try again');
                                Swal.fire(
                                    'Sorry',
                                    'Please try again!',
                                    'error'
                                )
                            }
                        }
                    });
                }
            });
        });

        $(document).on('click', '#listAttendees', function() {
            $('#chatInbox').removeClass('active');
            $('#cardsShared').removeClass('active');
            $('#listAttendees').addClass('active');
            $('#attendeesList').css('display', 'block');
            $('#inboxChat').css('display', 'none');
            $('#sharedCards').css('display', 'none');
            getOnlineAttendees('', '1');
        });

        $(document).on('click', '#chatInbox', function() {
            $('#listAttendees').removeClass('active');
            $('#cardsShared').removeClass('active');
            $('#chatInbox').addClass('active');
            $('#inboxChat').css('display', 'block');
            $('#attendeesList').css('display', 'none');
            $('#sharedCards').css('display', 'none');
            getAttendeesChat('<?= $userid; ?>');
        });

        $(document).on('click', '#cardsShared', function() {
            $('#chatInbox').removeClass('active');
            $('#listAttendees').removeClass('active');
            $('#cardsShared').addClass('active');
            $('#sharedCards').css('display', 'block');
            $('#inboxChat').css('display', 'none');
            $('#attendeesList').css('display', 'none');
            getSharedCards('<?php echo $userid; ?>');
        });

    });

    function updateAttendance() {
        updateVisitors();
        updateOnline();
        updateOnPage();
    }

    function updateVisitors() {
        $.ajax({
                url: 'control/update.php',
                data: {
                    action: 'updatevisitors',
                },
                type: 'post',
                success: function(output) {
                    //console.log(output);
                    $('#visitorCount').html(output);
                }
            })
            .always(function(data) {
                setTimeout(function() {
                    updateVisitors();
                }, 600000);
            });
    }

    function updateOnline() {
        $.ajax({
                url: 'control/update.php',
                data: {
                    action: 'updateonline',
                },
                type: 'post',
                success: function(output) {
                    //console.log(output);
                    $('#onlineCount').html(output);
                }
            })
            .always(function(data) {
                setTimeout(function() {
                    updateOnline();
                }, 60000);
            });
    }

    function updateOnPage() {
        $.ajax({
                url: 'control/update.php',
                data: {
                    action: 'updateonpage',
                    page: '<?= $curr_room ?>'
                },
                type: 'post',
                success: function(output) {
                    //console.log(output);
                    $('#onpageCount').html(output);
                }
            })
            .always(function(data) {
                setTimeout(function() {
                    updateOnPage();
                }, 60000);
            });
    }

    function updateEvent(userid, loc) {

        $.ajax({
                url: 'control/update.php',
                data: {
                    action: 'updateevent',
                    userId: userid,
                    room: loc
                },
                type: 'post',
                success: function(output) {
                    //console.log(output);
                    if (output == '0') {
                        location.href = './';
                    }
                }
            })
            .always(function(data) {
                setTimeout(function() {
                    updateEvent('<?= $userid ?>', '<?= $curr_room ?>');
                }, 30000);
            });
    }

    function getOnlineAttendees(keyword, pageNum) {
        $.ajax({
            url: 'control/users.php',
            data: {
                action: 'getonlineattendees',
                key: keyword,
                pagenum: pageNum,
                userId: '<?= $userid ?>'
            },
            type: 'post',
            success: function(response) {
                $("#attendeeList").html(response);
            }
        });
    }

    function getAttendeesChat(to_id) {
        $.ajax({
            url: 'control/chat.php',
            data: {
                action: 'getAttendeesChat',
                to: to_id
            },
            type: 'post',
            success: function(response) {
                $("#attendees-list-chat").html(response);
            }
        });

    }

    function getSharedCards(to_id) {
        $.ajax({
            url: 'control/users.php',
            data: {
                action: 'getsharedcards',
                to: to_id
            },
            type: 'post',
            success: function(response) {
                $("#cards-shared").html(response);
            }
        });

    }

    function getTeamChatHistory(to_user_id, from_user_id) {
        $.ajax({
            url: 'control/chat.php',
            data: {
                action: 'getteamchathistory',
                to: to_user_id,
                from: from_user_id,
                userId: '<?= $userid ?>'
            },
            type: 'post',
            success: function(response) {
                var tar = '#chat_history_' + to_user_id;
                var curr_hist = $(tar).html();
                if (response !== curr_hist) {
                    //console.log(response);
                    //console.log(curr_hist);
                    $(tar).html(response);
                    var myDiv = document.getElementById('chat_history_' + to_user_id);
                    myDiv.scrollTop = myDiv.scrollHeight;
                } else {
                    //console.log('no new msg');
                }

            }
        });
    }

    function make_chat_box(to_user_id, from_user_id) {
        var modal_content = '<div id="chat_' + to_user_id + '" class="user_dialog attendee_chat_box" title="Chat">';
        modal_content += '<div style="height:225px; border:0px solid #ccc; background-color:#ccc; overflow-y:auto; margin-bottom:15px;" class="chat_history scroll" data-touser="' + to_user_id + '" id="chat_history_' + to_user_id + '">';
        modal_content += '</div>';
        modal_content += '<div class="form-group">';
        modal_content += '<textarea name="chat_message_' + to_user_id + '" id="chat_message_' + to_user_id + '" rows="1" class="form-control" required></textarea>';
        modal_content += '</div><div class="form-group text-left">';
        modal_content += '<button type="button" name="send_chat" class="send_chat btn btn-primary" data-to="' + to_user_id + '" data-from="' + from_user_id + '" class="btn btn-info">Send</button></div></div>';
        $('#attendees-chat').html(modal_content);
    }

    function getChatHistory(to_user_id, from_user_id) {
        $.ajax({
            url: "control/users.php",
            data: {
                action: 'getchathistory',
                to: to_user_id,
                from: from_user_id,
                userId: '<?= $userid ?>'
            },
            type: 'post',
            success: function(response) {
                var tar = '#chat_history_' + to_user_id;
                var curr_hist = $(tar).html();
                if (response !== curr_hist) {
                    $('#chat_history_' + to_user_id).html(response);
                    var myDiv = document.getElementById('chat_history_' + to_user_id);
                    myDiv.scrollTop = myDiv.scrollHeight;
                }

            }
        });
    }

    function checkfornewchat(to_id) {
        $.ajax({
            url: "control/chat.php",
            data: {
                action: 'checknewchat',
                to: to_id
            },
            type: 'post',
            success: function(response) {
                if (response > 0) {
                    $('#chat-message').html('<span class="badge badge-danger">' + response + '</span>').css('display', 'block');
                } else {
                    $('#chat-message').html('').fadeOut();

                }

            }
        });
    }

    function getLeaderboard() {
        $.ajax({
            url: 'control/lb.php',
            data: {
                action: 'getleaderboard',
                user: '<?= $_SESSION['userid'] ?>'
            },
            type: 'post',
            success: function(output) {
                $('#conf-ranks').html(output);
            }
        });
    }

    function getMyRank(userId) {
        $.ajax({
            url: 'control/lb.php',
            data: {
                action: 'getpoints',
                user: userId
            },
            type: 'post',
            success: function(output) {
                console.log(output);
                $('#my-rank').html(output);
            }
        });
    }
</script>