<!-- component -->
<?php
if (!isset($_SESSION['x'])) {
    header("location: index.php?page=login");
}
?>
<div class="flex h-screen antialiased text-gray-800">
    <div class="flex flex-row h-full w-full overflow-x-hidden">
        <div class="flex flex-col py-8 pl-6 pr-2 w-64 bg-white flex-shrink-0">
            <div class="flex flex-row items-center justify-center h-12 w-full">
                <div class="flex items-center justify-center rounded-2xl text-indigo-700 bg-indigo-100 h-10 w-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                    </svg>
                </div>
                <div class="ml-2 font-bold text-2xl">CatChat</div>
            </div>
            <div class="flex flex-col mt-8">



                <div class="flex flex-row items-center justify-between text-xs">
                    <span class="font-bold">Active Conversations</span>
                    <form action="index.php?page=login" method="post">
                        <button class="bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-full mb-2" name="logout">
                            Logout
                        </button>
                    </form>

                </div>
                <div class="flex flex-col space-y-1 mt-4 -mx-2 h-48 overflow-y-auto">
                    <?php
                    $id = $_SESSION['c'];
                    $tab = Room::GetAllUsers($id);

                    foreach ($tab as $rs) { ?>
                        <button class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
                            <div class=" flex items-center justify-center h-8 w-8 bg-purple-200 rounded-full">
                                <img class="rounded-full" src="assets/image/<?= $rs['file'] ?>" alt="">

                            </div>
                            <div class="ml-2 text-sm font-semibold"><?= $rs['username'] ?></div>
                        </button>
                    <?php } ?>
                </div>
                <div class="flex flex-row items-center justify-between text-xs mt-6">
                    <span class="font-bold">Rooms</span>
                    <a href="index.php?page=creatroom" class="bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-full mb-2 name=" logout">
                        + Add room
                    </a>
                </div>
                <div class="flex flex-col space-y-1 mt-4 -mx-2 h-48 overflow-y-auto">
                    <?php
                    $id = $_SESSION['c'];
                    $tab = Room::GetAllRooms($id);
                    foreach ($tab as $rs) { ?>
                        <button class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
                            <div class="flex items-center justify-center h-8 w-8 bg-indigo-200 rounded-full">
                                <img class="rounded-full" src="assets/image/<?= $rs['file'] ?>" alt="">
                            </div>
                            <?= '<div class="ml-2 text-sm font-semibold">' . $rs['roomName'] . '</div>'; ?>
                        </button>
                    <?php } ?>


                </div>
            </div>
        </div>
        <div class="flex flex-col flex-auto h-full p-6">
            <div class="flex flex-col flex-auto flex-shrink-0 rounded-2xl bg-gray-100 h-full p-4">
                <div class="flex flex-col h-full overflow-x-auto mb-4">
                    <div class="flex flex-col h-full">
                        <div class="grid grid-cols-12 gap-y-2">
                            <div id="chatSection" class="col-start-1 col-end-8 p-3 rounded-lg">

                                <div class="col-start-1 col-end-8 p-3 rounded-lg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row items-center h-16 rounded-xl bg-white w-full px-4">
                    <div>
                        <button id="send" class="flex items-center justify-center text-gray-400 hover:text-gray-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex-grow ml-4">
                        <div class="relative w-full">
                            <input type="text" name="content" id="content" class="flex w-full border rounded-xl focus:outline-none focus:border-indigo-300 pl-4 h-10" />

                            <input type="hidden" value="51" name="sender" class="flex w-full border rounded-xl focus:outline-none focus:border-indigo-300 pl-4 h-10" />

                            <input type="hidden" id="receiver" value="52" name="reciever" class="flex w-full border rounded-xl focus:outline-none focus:border-indigo-300 pl-4 h-10" />
                            <button class="absolute flex items-center justify-center h-full w-12 right-0 top-0 text-gray-400 hover:text-gray-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="ml-4">
                        <button type="submit" id="btn" class="flex items-center justify-center bg-indigo-500 hover:bg-indigo-600 rounded-xl text-white px-4 py-1 flex-shrink-0">
                            <span>Send</span>
                            <div id="div"></div>
                            <span class="ml-2">
                                <svg class="w-4 h-4 transform rotate-45 -mt-px" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
    const btn = document.getElementById('btn')
    const content = document.getElementById('content')
    const receiver = document.getElementById('receiver')
    const chatSection = document.getElementById('chatSection')
    const div = document.getElementById('div');

    btn.onclick = () => {
        $.ajax({
            type: "POST",
            url: "index.php?page=message",
            data: {
                content: content.value,
                receiver: receiver.value
            },
            success: (data) => {
                console.log(data);
                displayChat();
                content.value = "";
            }
        })
    }

    function displayChat() {
        chatSection.innerHTML = "";
        $.ajax({
            type: "POST",
            url: "index.php?page=message",
            data: {
                displayMessage: true
            },
            success: (data) => {
                messages = JSON.parse(data);
                console.log(messages);

                messages.forEach((message) => {
                    chatSection.innerHTML += `<div class="flex flex-row items-center">
                                    <img src="assets/image/${message.file}" class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
                                    <div class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl">
                                        <div>${message.content}</div>
                                    </div>
                                </div>`;
                })
            }
        })

    }
    displayChat();
</script>