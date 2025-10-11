package kr.co.mdi2.common.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class MainController {

	// 메인 페이지
	@GetMapping("/")
	public String index(Model model) {
		return "index";
	}
}
