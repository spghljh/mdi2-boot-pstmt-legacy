package kr.co.mdi2.common.jdbc;

import java.sql.Connection;
import java.sql.SQLException;

import javax.sql.DataSource;

import org.springframework.beans.factory.annotation.Autowired;

/**
 * DBMS 중립<br>
 * PostgreSQL에서는 getConnection() 오버라이드<br>
 */
public abstract class AbstractJdbcDao {
	@Autowired
	protected DataSource dataSource;

	protected Connection getConnection() throws SQLException {
		return dataSource.getConnection();
	}
	

}

