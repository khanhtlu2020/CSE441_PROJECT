package com.example.mydriving;

import android.os.Bundle;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

import java.util.ArrayList;
import java.util.List;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_main);
    }
    // Hàm tạo danh sách các đề thi
    private List<String> createExams() {
        List<String> exams = new ArrayList<>();
        for (int i = 1; i <= 8; i++) {
            exams.add("Đề số " + i + "\n25 câu/19 phút");
        }
        return exams;
    }
    // Hàm hiển thị danh sách đề thi lên giao diện
    private void displayExams(List<String> exams) {
        // Sử dụng LayoutInflater để tạo các view động
        // ...
    }
}