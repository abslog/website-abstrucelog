<form class="form-horizontal content-padd contact-form" action="gdform.php" method="post">

    <div class="control-group">
        <label class="control-label" for="inputName">Name</label>
        <div class="controls">
            <input type="text" id="inputName" placeholder="Name" class="input-xxlarge"/>
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="inputEmail">Email</label>
        <div class="controls">
            <input type="text" id="inputEmail" placeholder="Email" class="input-xxlarge"/>
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="inputSubject">Subject</label>
        <div class="controls">
            <input type="text" id="inputSubject" placeholder="Subject" class="input-xxlarge"/>
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="inputComment">Comment</label>
        <div class="controls">
            <textarea id="inputComment" placeholder="Comment" rows="5" class="input-xxlarge"></textarea>
        </div>
    </div>
    
    <input type="hidden" name="redirect" value="index.php" />

    <button type="submit" class="btn btn-success pull-right">Submit</button>
    
</form>
