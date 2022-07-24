id = getRequestString("uid")
srv = getRequestString("server");

sql = 'SELECT * FROM Users WHERE uid ="' + id + '" AND server ="' + srv + '"'