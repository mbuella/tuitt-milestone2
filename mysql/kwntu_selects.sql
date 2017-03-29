SELECT user_name,
	CONCAT(member_fname, ' ', member_lname) AS member_fullname,
    user_role
FROM users
LEFT JOIN members
ON members.user_id = users.user_id
WHERE user_name = 'mbuella';