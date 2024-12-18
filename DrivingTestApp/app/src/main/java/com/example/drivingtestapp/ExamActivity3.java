package com.example.drivingtestapp;

import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.graphics.Color;
import android.os.Bundle;
import android.os.CountDownTimer;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;
import androidx.viewpager2.widget.ViewPager2;

import com.example.drivingtestapp.models.Question;
import com.example.drivingtestapp.services.ApiService3;

import java.util.ArrayList;
import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class ExamActivity3 extends AppCompatActivity {
    public static int score = 20;
    private ArrayList<Question> questions = new ArrayList<>();
    ViewPager2 viewPager;
    Button btnPrev, btnNext, btnSubmit;
    TextView cur, total, cDown;
    CountDownTimer countDownTimerTotal;
    int timeLeftInMillisTotal;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_exam);

        viewPager = findViewById(R.id.viewpager);
        btnPrev = findViewById(R.id.btnPrev);
        btnNext = findViewById(R.id.btnNext);
        btnSubmit = findViewById(R.id.btnSubmit);
        cur = findViewById(R.id.current);
        total = findViewById(R.id.total);
        cDown = findViewById(R.id.countDown);

        timeLeftInMillisTotal = 1140000;
        countDownTimerTotal = new CountDownTimer(timeLeftInMillisTotal, 1000) {
            @Override
            public void onTick(long millisUntilFinished) {
                timeLeftInMillisTotal = (int) millisUntilFinished;
                updateCountDownText();
            }

            @Override
            public void onFinish() {
                Intent intent = new Intent();
                intent.putExtra("result", score);
                setResult(RESULT_OK, intent);
                ExamActivity3.this.finish();
            }
        }.start();

        getQuestions();

        // Handle previous button click
        btnPrev.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                int previousItem = viewPager.getCurrentItem() - 1;
                if (previousItem >= 0) {
                    viewPager.setCurrentItem(previousItem);
                }
            }
        });

        // Handle next button click
        btnNext.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                int nextItem = viewPager.getCurrentItem() + 1;
                if (nextItem < questions.size()) {
                    viewPager.setCurrentItem(nextItem);
                }
            }
        });

        btnSubmit.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                submitExam();
            }
        });
    }

    private void getQuestions() {
        ApiService3.apiService.questionCall().enqueue(new Callback<List<Question>>() {
            @Override
            public void onResponse(Call<List<Question>> call, Response<List<Question>> response) {
                questions = new ArrayList<>(response.body());
                for (Question question : questions) {
                    Log.i("QuestionsLog", question.toString());
                }
                viewPager.setUserInputEnabled(false);
                ViewPagerAdapter adapter = new ViewPagerAdapter(ExamActivity3.this, questions);
                viewPager.setAdapter(adapter);
                cur.setText("1");
                total.setText(String.valueOf(questions.size()));
                viewPager.registerOnPageChangeCallback(new ViewPager2.OnPageChangeCallback() {
                    @Override
                    public void onPageSelected(int position) {
                        cur.setText(String.valueOf(position + 1));
                        updateButtonVisibility(position);
                    }
                });
                updateButtonVisibility(0);
            }

            @Override
            public void onFailure(Call<List<Question>> call, Throwable t) {
                Toast.makeText(ExamActivity3.this, "Error: " + t.getMessage(), Toast.LENGTH_SHORT).show();
                Log.e("ApiError", t.getMessage(), t);
            }
        });
    }

    private void updateButtonVisibility(int position) {
        if (position == 0) {
            btnPrev.setVisibility(View.GONE);
            btnNext.setVisibility(View.VISIBLE);
            btnSubmit.setVisibility(View.GONE);
        } else if (position == questions.size() - 1) {
            btnNext.setVisibility(View.GONE);
            btnPrev.setVisibility(View.VISIBLE);
            btnSubmit.setVisibility(View.VISIBLE);
        } else {
            btnPrev.setVisibility(View.VISIBLE);
            btnNext.setVisibility(View.VISIBLE);
            btnSubmit.setVisibility(View.GONE);
        }
    }

    private void updateCountDownText() {
        int minutes = (int) ((timeLeftInMillisTotal / 1000) / 60);
        int seconds = (int) ((timeLeftInMillisTotal / 1000) % 60);
        String timeLeftFormatted = String.format("%02d:%02d", minutes, seconds);
        cDown.setText(timeLeftFormatted);
        if (timeLeftInMillisTotal < 10000) {
            cDown.setTextColor(Color.RED);
        } else {
            cDown.setTextColor(Color.BLACK);
        }
    }

    private void submitExam() {
        int correctAnswers = calculateCorrectAnswers();
        int totalQuestions = questions.size();
        String timeTaken = getTimeTaken();

        String passStatus = correctAnswers >= 21 ? "ĐẠT" : "TRƯỢT";

        String resultMessage = String.format("Đúng %d/%d câu.\nThời gian làm bài: %s\nKết quả: %s",
                correctAnswers, totalQuestions, timeTaken, passStatus);

        new AlertDialog.Builder(this)
                .setTitle("Kết quả")
                .setMessage(resultMessage)
                .setPositiveButton(android.R.string.ok, new DialogInterface.OnClickListener() {
                    @Override
                    public void onClick(DialogInterface dialog, int which) {
                        Intent intent = new Intent(ExamActivity3.this, ExamListActivity.class);
                        intent.addFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP | Intent.FLAG_ACTIVITY_NEW_TASK);
                        startActivity(intent);
                        finish();
                    }
                })
                .show();
    }

    private int calculateCorrectAnswers() {
        int correctAnswers = 0;
        for (Question question : questions) {
            if (question.isCorrect()) {
                correctAnswers++;
            }
        }
        return correctAnswers;
    }

    private String getTimeTaken() {
        int minutes = (int) ((1140000 - timeLeftInMillisTotal) / 1000) / 60;
        int seconds = (int) ((1140000 - timeLeftInMillisTotal) / 1000) % 60;
        return String.format("%02d:%02d", minutes, seconds);
    }
}
