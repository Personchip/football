<!-- hello -->
<div class="bloc bloc-fill-screen bg-mountains-italy none tc-white " id="hello">

    <div class="container">
        <div class="row">
            <div class="col"><?php switch (!$user) {
                                    case 1:
                                        echo '
<h1 class="mg-md text-center btn-resize-mode h1-привет--style tc-white">' . $lang_index['Hello'] . ' !</h1> <h3 class="mg-md float-none text-center tc-white btn-resize-mode h3-2-style">' . $lang_index['You didnt sign in'] . ' !</h3>';
                                        break;
                                    case 0:
                                        echo '
<h1 class="mg-md text-center btn-resize-mode h1-style tc-white">' . $lang_index['Hello'] . ', ' . htmlspecialchars($user['Login']) . ' !</h1> <h3 class="mg-md float-none text-center tc-black btn-resize-mode h3-hello-style">' . $lang_index['You are successfully logged in'] . ' !</h3> ';
                                        break;
                                }

                                ?></div>
        </div>
    </div>
</div>