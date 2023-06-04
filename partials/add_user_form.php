<h2 class="adduser__container-title">Add new user</h2>
<form method="POST" enctype="multipart/form-data" action="" class="adduser__container-form">
    <div class="form__row">
        <input name="name" type="text" value="" placeholder="Name" maxlength="150" required>
        <input name="username" type="text" value="" placeholder="Username" maxlength="150" required>
        <input name="email" type="email" value="" placeholder="Email" maxlength="150" required>
    </div>
    <div class="form__row">
        <input name="street" type="text" value="" placeholder="Address - Street" maxlength="150" required>
        <input name="zipcode" type="text" value="" placeholder="Address - Zipcode" maxlength="150" required>
        <input name="city" type="text" value="" placeholder="Address - City" maxlength="150" required>
    </div>
    <div class="form__row">
        <input name="phone" type="tel" value="" placeholder="Phone" maxlength="150" required>
        <input name="company" type="text" value="" placeholder="Company" maxlength="150" required>
        <input name="biggestid" type="hidden" id="biggestid" maxlength="150" value="">
    </div>
    <button class="sendButton" onclick="biggestId()">Submit</button>
</form>