<html>
    <body>
        <form method="POST" action="createNewBooking.php">
            <?PHP include ("createMemberDropdonw.php");?><br>
            Member ID: <input type="memberID" name="memberID"/><br>
            Court ID: <input type="courtID" name="courtID"/><br>
            
            Booking Date: <input type="date" name="bookingDate"/><br>
            Start Time: <input type="time" name="startTime"/><br>
            End Time: <input type="time" name="endTime"/><br>
            <input type="submit">
        </form>
    </body>
</html>