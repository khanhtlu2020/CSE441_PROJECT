package com.example.drivingtestapp;

import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.TextView;
import android.widget.Toast;

import androidx.fragment.app.Fragment;

import com.example.drivingtestapp.models.Question;

public class QuestionFragment extends Fragment {

    private View view;
    private Question ques;
    private boolean isTimeUp = false;

    TextView question;
    RadioGroup rdoG;
    RadioButton idA, idB, idC, idD;

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        view = inflater.inflate(R.layout.fragment_question, container, false);

        question = view.findViewById(R.id.ques);
        rdoG = view.findViewById(R.id.rdoGR);
        idA = view.findViewById(R.id.idea1);
        idB = view.findViewById(R.id.idea2);
        idC = view.findViewById(R.id.idea3);
        idD = view.findViewById(R.id.idea4);

        Bundle bundle = getArguments();

        if (bundle != null) {
            ques = (Question) bundle.getSerializable("question");
            if (ques != null) {
                question.setText(ques.getQuestion());
                idA.setText(ques.getIdeaA());
                idB.setText(ques.getIdeaB());
                idC.setText(ques.getIdeaC());
                idD.setText(ques.getIdeaD());
            }
        }

        rdoG.setOnCheckedChangeListener(new RadioGroup.OnCheckedChangeListener() {
            @Override
            public void onCheckedChanged(RadioGroup group, int checkedId) {
                int selectedAnswer = -1; // -1 nếu không có lựa chọn

                if (checkedId == idA.getId()) {
                    selectedAnswer = 1;
                } else if (checkedId == idB.getId()) {
                    selectedAnswer = 2;
                } else if (checkedId == idC.getId()) {
                    selectedAnswer = 3;
                } else if (checkedId == idD.getId()) {
                    selectedAnswer = 4;
                }

                ques.setUserAnswer(selectedAnswer);

                if (ques.isCorrect()) {
                    Toast.makeText(getContext(), "Đúng", Toast.LENGTH_SHORT).show();
                } else {
                    Toast.makeText(getContext(), "Sai", Toast.LENGTH_SHORT).show();
                    ExamActivity.score -= 1;
                }

                rdoG.setEnabled(false);
                idA.setEnabled(false);
                idB.setEnabled(false);
                idC.setEnabled(false);
                idD.setEnabled(false);
            }
        });
        return view;
    }
}
